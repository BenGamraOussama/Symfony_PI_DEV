<?php

namespace App\Service;

use Google_Client;
use Google_Service_Calendar;
use Google_Service_Calendar_Event;

class GoogleCalendarService
{
    private Google_Service_Calendar $calendarService;
    private Google_Client $client;

    public function __construct(string $credentialsPath)
    {
        $this->client = new Google_Client();
        $this->client->setAuthConfig($credentialsPath); // Update path to credentials.json
        $this->client->setScopes([Google_Service_Calendar::CALENDAR]);
        $this->client->setAccessType('offline');
        $this->client->setPrompt('select_account consent');

        $this->calendarService = new Google_Service_Calendar($this->client);
        $tokenPath = 'config/token.json'; // Specify the path to your token file
        
        // Load previously authorized token from a file, if it exists.
        if (file_exists($tokenPath)) {
            $accessToken = json_decode(file_get_contents($tokenPath), true);
            $this->client->setAccessToken($accessToken);
        }

        // If there is no previous token or it's expired, get a new one.
        if ($this->client->isAccessTokenExpired()) {
            // Refresh the token if possible, else fetch a new one.
            if ($this->client->getRefreshToken()) {
                $this->client->fetchAccessTokenWithRefreshToken($this->client->getRefreshToken());
            } else {
                // Request authorization from the user.
                $authUrl = $this->client->createAuthUrl();
                // Return the authorization URL to be handled by the controller
                return $authUrl;
            }
            // Save the token to a file.
            if (!file_exists(dirname($tokenPath))) {
                mkdir(dirname($tokenPath), 0700, true);
            }
            file_put_contents($tokenPath, json_encode($this->client->getAccessToken()));
        }
    }

    public function createEvent(string $calendarId, array $eventData): Google_Service_Calendar_Event
    {
        $event = new Google_Service_Calendar_Event([
            'summary' => $eventData['title'],
            'start' => ['dateTime' => $eventData['start'], 'timeZone' => 'Europe/Paris'],
            'end' => ['dateTime' => $eventData['end'], 'timeZone' => 'Europe/Paris'],
            'description' => $eventData['description'] ?? '',
        ]);

        return $this->calendarService->events->insert($calendarId, $event);
    }

    public function getClient(): Google_Client
    {
        return $this->client;
    }
}
