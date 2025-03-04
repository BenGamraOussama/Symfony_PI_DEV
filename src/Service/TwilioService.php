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
    // Ensure the phone number includes the country code and is formatted correctly
    $to = preg_replace('/[^0-9+]/', '', $to); 
    if (strpos($to, '+') !== 0) {
        $to = '+' . $to; // Prepend "+" if missing
    }

    $this->twilio->messages->create(
        $to, 
        [
            'from' => $_ENV['TWILIO_PHONE_NUMBER'], 
            'body' => $message
        ]
    );
}


}
