<?php

require 'vendor/autoload.php';

use App\Service\TwilioService;

$sid = 'AC3f14d012025432f63a67f72dd629db60'; // Set directly for testing
$token = 'cdee68c3bc15ae02851d55a7246aef4b'; // Set directly for testing
$twilioNumber = '+17404802130'; // Set directly for testing


$twilioService = new TwilioService($sid, $token, $twilioNumber);
$twilioService->sendSms('+21627448125', 'Test message from Twilio!');

echo "SMS sent successfully.";
