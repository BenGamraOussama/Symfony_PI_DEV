<?php

namespace App\Controller;

use App\Service\SquareService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SquareController extends AbstractController
{
    #[Route('/square/pay', name: 'square_pay', methods: ['POST'])]
    public function pay(Request $request, SquareService $squareService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['nonce']) || !isset($data['amount'])) {
            return $this->json(['error' => 'Invalid request'], 400);
        }

        $payment = $squareService->processPayment($data['nonce'], $data['amount']);

        return $this->json($payment);
    }
}
