<?php


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
