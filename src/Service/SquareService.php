<?php

namespace App\Service;

use Square\SquareClient;
use Square\Models\CreatePaymentRequest;
use Square\Exceptions\ApiException;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class SquareService
{
    private $client;
    private $locationId;

    public function __construct(ParameterBagInterface $params)
    {
        $this->client = new SquareClient([
            'accessToken' => $params->get('SQUARE_ACCESS_TOKEN'),
            'environment' => $params->get('SQUARE_ENV') === 'sandbox' ? 'sandbox' : 'production'
        ]);

        $this->locationId = $params->get('SQUARE_LOCATION_ID');
    }

    public function processPayment($nonce, $amount, $currency = 'USD')
    {
        $paymentsApi = $this->client->getPaymentsApi();

        $request = new CreatePaymentRequest($nonce, uniqid(), new \Square\Models\Money([
            'amount' => $amount * 100, // Convertir en centimes
            'currency' => $currency
        ]));

        $request->setLocationId($this->locationId);

        try {
            $response = $paymentsApi->createPayment($request);
            return $response->getResult();
        } catch (ApiException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
