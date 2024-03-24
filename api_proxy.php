<?php
$apiKey = "f27b0fc77baba3236a3876f57446d679";
$apiRoot = "http://ws.audioscrobbler.com/2.0/";
$username = "Julimiro";

// URL to make the request to
$url = "{$apiRoot}?method=user.getrecenttracks&user={$username}&format=json&limit=1&api_key={$apiKey}";

// Make the request and get the response
$response = file_get_contents($url);

// Check if the response is valid
if ($response === false) {
    // Handle error if request fails
    echo "Error: Failed to fetch data from the API.";
} else {
    // Set appropriate headers
    header('Content-Type: application/json');
    
    // Echo the response
    echo $response;
}
?>
