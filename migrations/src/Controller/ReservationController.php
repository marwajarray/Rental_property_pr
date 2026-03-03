<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Property;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class ReservationController extends AbstractController
{
    // =========================
    // USER : CREATE RESERVATION
    // =========================
    #[IsGranted('ROLE_USER')]
    #[Route('/reservation/new/{propertyId}', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(
        int $propertyId,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $property = $em->getRepository(Property::class)->find($propertyId);

        if (!$property) {
            throw $this->createNotFoundException('Property not found');
        }

        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $arrival = $reservation->getDateArrivee();
            $departure = $reservation->getDateDepart();

            if (!$arrival || !$departure) {
                $this->addFlash('error', 'Please select valid dates.');
                return $this->redirectToRoute('app_reservation_new', ['propertyId' => $propertyId]);
            }

            $days = $departure->diff($arrival)->days;

            if ($days <= 0) {
                $this->addFlash('error', 'Check-out date must be after check-in.');
                return $this->redirectToRoute('app_reservation_new', ['propertyId' => $propertyId]);
            }

            $reservation
                ->setProperty($property)
                ->setUser($this->getUser())
                ->setTotalPrice($days * $property->getPrice())
                ->setStatut(Reservation::STATUS_PENDING_CASH);

            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('app_payment_new', [
                'reservationId' => $reservation->getId()
            ]);
        }

        return $this->render('reservation/new.html.twig', [
            'form' => $form->createView(),
            'property' => $property,
        ]);
    }

    // =========================
    // ADMIN : LIST RESERVATIONS
    // =========================
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/reservations', name: 'app_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository): Response
    {
        return $this->render('admin/reservation/index.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }
}
