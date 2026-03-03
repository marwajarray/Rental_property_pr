<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Image;
use App\Entity\Property;
use App\Entity\Service;
use App\Entity\Event; // ADDED
use App\Form\ImageType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('')]
final class ImageController extends AbstractController
{
    private $entityManager;
    private $slugger;

    public function __construct(EntityManagerInterface $entityManager, SluggerInterface $slugger)
    {
        $this->entityManager = $entityManager;
        $this->slugger = $slugger;
    }

    #[Route('/image', name: 'app_image')]
    public function index(): Response
    {
        $images = $this->entityManager->createQuery(
            'SELECT i, r, s, e FROM App\Entity\Image i
             LEFT JOIN i.property r
             LEFT JOIN i.service s
             LEFT JOIN i.event e'
        )->getResult();

        return $this->render('image/index.html.twig', [
            'images' => $images,
        ]);
    }

    #[Route('/image/upload/{entityType}/{entityId}', name: 'app_image_upload', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function upload(Request $request, string $entityType, int $entityId): Response
    {
        $parentEntity = $this->getParentEntity($entityType, $entityId);
        if (!$parentEntity) {
            throw $this->createNotFoundException('The requested ' . $entityType . ' does not exist.');
        }

        $image = new Image();
        $form = $this->createForm(ImageType::class, $image);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile|null $uploadedFile */
            $uploadedFile = $form->get('imageFile')->getData();

            if ($uploadedFile instanceof UploadedFile) {
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $extension = $uploadedFile->guessExtension() ?? 'bin';
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $extension;

                $clientMime = $uploadedFile->getClientMimeType();
                $size = $uploadedFile->getSize();

                $targetDir = $this->getParameter('kernel.project_dir') . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'images';
                $uploadsDir = dirname($targetDir);
                if (!is_dir($uploadsDir)) {
                    @mkdir($uploadsDir, 0775, true);
                }
                if (!is_dir($targetDir)) {
                    @mkdir($targetDir, 0775, true);
                }

                try {
                    $uploadedFile->move($targetDir, $newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Could not upload file: ' . $e->getMessage());
                    return $this->redirectToRoute('app_image_upload', ['entityType' => $entityType, 'entityId' => $entityId]);
                }

                $image->setFilename($newFilename);
                $image->setMimeType($clientMime);
                $image->setSize($size);

                // --- ASSOCIATION LOGIC ---
                if ($parentEntity instanceof Property) {
                    $image->setProperty($parentEntity);
                    $parentEntity->addImage($image);
                } elseif ($parentEntity instanceof Service) {
                    $image->setService($parentEntity);
                    $parentEntity->addImage($image);
                } elseif ($parentEntity instanceof Event) { // NEW: Handle Event
                    $image->setEvent($parentEntity);
                    $parentEntity->addImage($image);
                }

                try {
                    $this->entityManager->persist($image);
                    $this->entityManager->flush();
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Database Error: ' . $e->getMessage());
                    @unlink($targetDir . DIRECTORY_SEPARATOR . $newFilename);
                    return $this->redirectToRoute('app_image_upload', ['entityType' => $entityType, 'entityId' => $entityId]);
                }

                $this->addFlash('success', 'Image uploaded successfully!');

                // --- REDIRECTION LOGIC ---
                if ($parentEntity instanceof Property) {
                    return $this->redirectToRoute('app_property_show', ['id' => $entityId]);
                } elseif ($parentEntity instanceof Service) {
                    return $this->redirectToRoute('app_service_show', ['id' => $entityId]);
                } elseif ($parentEntity instanceof Event) {
                    return $this->redirectToRoute('app_event_show', ['id' => $entityId]);
                }
            } else {
                $this->addFlash('error', 'No file uploaded.');
            }
        }

        return $this->render('image/upload.html.twig', [
            'form' => $form->createView(),
            'parentEntity' => $parentEntity,
            'entityType' => $entityType,
        ]);
    }

    #[Route('/image/{id}', name: 'app_image_delete', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(Request $request, Image $image): Response
    {
        if ($this->isCsrfTokenValid('delete' . $image->getId(), $request->request->get('_token'))) {
            
            // 1. Detect Parent and ID
            $parentEntity = $image->getProperty() ?? $image->getService() ?? $image->getEvent();
            
            if ($image->getProperty()) {
                $entityType = 'property';
            } elseif ($image->getService()) {
                $entityType = 'service';
            } else {
                $entityType = 'event';
            }
            
            $entityId = $parentEntity->getId();

            // 2. Database Cleanup
            $this->entityManager->remove($image);
            $this->entityManager->flush();

            // 3. File System Cleanup
            $filePath = $this->getParameter('kernel.project_dir') . '/public/uploads/images/' . $image->getFilename();
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $this->addFlash('success', 'Image deleted successfully.');
            
            // 4. Redirect based on type
            return $this->redirectToRoute('app_' . $entityType . '_show', ['id' => $entityId]);
        }

        $this->addFlash('error', 'Invalid CSRF token.');
        return $this->redirectToRoute('app_property_index'); 
    }

    private function getParentEntity(string $entityType, int $entityId)
    {
        if ($entityType === 'property') {
            return $this->entityManager->getRepository(Property::class)->find($entityId);
        } elseif ($entityType === 'service') {
            return $this->entityManager->getRepository(Service::class)->find($entityId);
        } elseif ($entityType === 'event') { // NEW: Handle Event
            return $this->entityManager->getRepository(Event::class)->find($entityId);
        }
        return null;
    }
}