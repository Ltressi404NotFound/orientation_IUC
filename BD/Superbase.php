<?php

class Supabase {

    private $url = "https://ruhrhrnlcppmqsfncref.supabase.co";       // ton url de superbase
    private $apikey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InJ1aHJocm5sY3BwbXFzZm5jcmVmIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NjQwOTMwNzUsImV4cCI6MjA3OTY2OTA3NX0.eVEtwPiuAlJHYiJY_k6ehcmlf0RDAgayl8M4BWZ_Hbk";                       // clé API                                  // table à utiliser

    public function insertMessage($role, $message) {
        $endpoint = $this->url . "/rest/v1/chat_logs";

        $data = [
            "role" => $role,
            "message" => $message
        ];

        $ch = curl_init($endpoint);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "apikey: {$this->apikey}",
            "Authorization: Bearer {$this->apikey}",
            "Content-Type: application/json",
            "Prefer: return=representation"
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }
}