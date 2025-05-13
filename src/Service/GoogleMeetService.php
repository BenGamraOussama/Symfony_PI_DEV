<?php
namespace App\Service;

use Google\Client;
use Google\Service\Calendar;
use Google\Service\Calendar\Event;

class GoogleMeetService
{
    private $client;
    private $calendarService;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setAuthConfig(__DIR__ . '/../../config/google/credentials.json'); 
        $this->client->addScope(Calendar::CALENDAR_EVENTS);
        $this->client->setAccessType('offline');

        $this->calendarService = new Calendar($this->client);
    }

    public function getAuthorizationUrl(): string
    {
        $this->client->setRedirectUri('http://localhost:8000/oauth2callback');
        return $this->client->createAuthUrl();
    }

    public function handleOAuthCallback($code): void
    {
        $token = $this->client->fetchAccessTokenWithAuthCode($code); // Fetch the access token
        $this->client->setAccessToken($token);
    }

    public function isAuthenticated(): bool
    {
        return $this->client->getAccessToken() !== null;
    }

    public function createGoogleMeetEvent($startDateTime, $endDateTime, $summary, $description, $attendeesEmails): string
    {
        if ($this->client->isAccessTokenExpired()) { 
            // Handle token refresh or re-authentication
            $this->client->fetchAccessTokenWithRefreshToken($this->client->getRefreshToken());
        }

        $event = new Event([
            'summary' => $summary,
            'description' => $description,
            'start' => ['dateTime' => $startDateTime, 'timeZone' => 'UTC'],
            'end' => ['dateTime' => $endDateTime, 'timeZone' => 'UTC'],
            'conferenceData' => [
                'createRequest' => [
                    'requestId' => uniqid(),
                    'conferenceSolutionKey' => ['type' => 'hangoutsMeet']
                ]
            ],
            'attendees' => array_map(fn($email) => ['email' => $email], $attendeesEmails),
        ]);

        $event = $this->calendarService->events->insert('primary', $event, ['conferenceDataVersion' => 1]);

        return $event->getHangoutLink(); // Retourne le lien Google Meet
    }
}
