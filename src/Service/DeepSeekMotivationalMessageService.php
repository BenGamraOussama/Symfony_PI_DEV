<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\Exception\ClientException;

class DeepSeekMotivationalMessageService
{
    private $httpClient;
    private $deepSeekApiKey;

    public function __construct(HttpClientInterface $httpClient, string $deepSeekApiKey)
    {
        $this->httpClient = $httpClient;
        $this->deepSeekApiKey = $deepSeekApiKey;
    }

    public function getMotivationalMessage(): string
    {
        try {
            $response = $this->httpClient->request('POST', 'https://api.deepseek.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->deepSeekApiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'deepseek-motivational', // Exemple de modèle
                    'messages' => [
                        ['role' => 'user', 'content' => 'Give me a motivational message'],
                    ],
                ],
            ]);

            $content = $response->toArray();

            return $content['choices'][0]['message']['content'] ?? 'Pas de message de motivation disponible.';
        } catch (ClientException $e) {
            if ($e->getCode() === 402) {
                return 'Service de motivation indisponible. Veuillez vérifier votre abonnement.';
            }
            throw $e;
        }
    }
}