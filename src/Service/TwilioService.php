<?php
namespace App\Service;

use Twilio\Rest\Client;
use Twilio\Http\CurlClient;

class TwilioService
{
    private $twilio;
    private $twilioNumber;

    public function __construct(string $sid, string $token, string $twilioNumber)
    {
        $curlClient = new CurlClient([
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
        ]);

        // The 4th argument is region, 5th is HttpClient
        $this->twilio = new Client($sid, $token, null, null, $curlClient);
        $this->twilioNumber = $twilioNumber;
    }

    public function sendSms(string $to, string $message): void
    {
        $to = preg_replace('/[^0-9+]/', '', $to); 
        if (strpos($to, '+216') === false) {
            $to = '+216' . $to; 
        }

        $this->twilio->messages->create(
            $to, 
            [
                'from' => $this->twilioNumber, // Use the instance variable directly
                'body' => $message
            ]
        );
    }
}
