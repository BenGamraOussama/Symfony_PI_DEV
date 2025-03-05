<?php
namespace App\Service;

use Twilio\Rest\Client;

class TwilioService
{
    private $twilio;
    private $twilioNumber;

    public function __construct(string $sid, string $token, string $twilioNumber)
    {
        $this->twilio = new Client($sid, $token);
        $this->twilioNumber = $twilioNumber;
    }

    public function sendSms(string $to, string $message): void
    {
        $to = preg_replace('/[^0-9+]/', '', $to); 
        if (strpos($to, '+216') !== 0) {
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
