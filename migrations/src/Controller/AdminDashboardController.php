<?php

namespace App\Controller;

use App\Entity\Property;
use App\Entity\Service;
use App\Entity\Event;
use App\Entity\Staff;
use App\Entity\Reservation;
use App\Entity\Payment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin')]
class AdminDashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'admin_dashboard')]
    public function index(EntityManagerInterface $em): Response
    {
        return $this->render('admin/dashboard.html.twig', [
            'properties' => $em->getRepository(Property::class)->count([]),
            'services' => $em->getRepository(Service::class)->count([]),
            'events' => $em->getRepository(Event::class)->count([]),
            'staff' => $em->getRepository(Staff::class)->count([]),
            'reservations' => $em->getRepository(Reservation::class)->count([]),
            'payments' => $em->getRepository(Payment::class)->count([]),
        ]);
    }
}
