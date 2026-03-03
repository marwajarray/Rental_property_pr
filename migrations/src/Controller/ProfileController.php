<?php

namespace App\Controller;

use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            $reservations = $em->getRepository(Reservation::class)->findAll();
        } else {
            $reservations = $em->getRepository(Reservation::class)->findBy(['user' => $user]);
        }

        return $this->render('profile/index.html.twig', [
            'user' => $user,
            'reservations' => $reservations,
        ]);
    }
}
