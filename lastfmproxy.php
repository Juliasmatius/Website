<?php
// URL to fetch the recent tracks
$url = 'https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=Julimiro&format=json&limit=1&api_key=f27b0fc77baba3236a3876f57446d679';

// Initialize a cURL session
$ch = curl_init();

// Set the URL
curl_setopt($ch, CURLOPT_URL, $url);

// Return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute the session and store the result
$response = curl_exec($ch);

// Close the cURL session
curl_close($ch);

// Set the header to return JSON content
header('Content-Type: application/json');

// Output the response
echo $response;
?>
