<?php

namespace App\Controller;

use App\Entity\Payment;
use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class PaymentController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/payment/new', name: 'app_payment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $reservationId = $request->query->get('reservationId');

        if (!$reservationId) {
            throw $this->createNotFoundException('Reservation ID missing');
        }

        $reservation = $em->getRepository(Reservation::class)->find($reservationId);

        if (!$reservation) {
            throw $this->createNotFoundException('Reservation not found');
        }

        if ($reservation->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        if ($request->isMethod('POST')) {

            if (!$this->isCsrfTokenValid('payment', $request->request->get('_csrf_token'))) {
                $this->addFlash('error', 'Invalid CSRF token.');
                return $this->redirectToRoute('app_payment_new', [
                    'reservationId' => $reservationId
                ]);
            }

            $method = $request->request->get('method');

            if (!in_array($method, ['cash', 'card'], true)) {
                $this->addFlash('error', 'Invalid payment method.');
                return $this->redirectToRoute('app_payment_new', [
                    'reservationId' => $reservationId
                ]);
            }

            $payment = new Payment();
            $payment->setMontant($reservation->getTotalPrice());
            $payment->setMethode($method);
            $payment->setStatut('paid');
            $payment->setReservation($reservation);

            if ($method === 'cash') {
                $reservation->setStatut(Reservation::STATUS_PENDING_CASH);
            } else {
                $reservation->setStatut(Reservation::STATUS_PAID);
            }

            $em->persist($payment);
            $em->flush();

            return $this->redirectToRoute('app_payment_success');
        }

        return $this->render('payment/new.html.twig', [
            'reservation' => $reservation,
            'property'        => $reservation->getProperty(),
            'total'       => $reservation->getTotalPrice(),
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/payment/success', name: 'app_payment_success')]
    public function success(): Response
    {
        return $this->render('payment/success.html.twig');
    }
}
