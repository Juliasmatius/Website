<?php include "../../static/commons/header.php";?>
<link rel="stylesheet" href="/static/style/posts.css">
<div class="main">
<?php

// Start output buffering
ob_start();

// Check if post ID is provided
if(isset($_GET['post'])) {
    // Get the post ID
    $postid = $_GET['post'];
} else {
    // ID not provided, return error message and exit
    http_response_code(404);
    echo '404 Not Found: No post ID provided';
    exit();
}

// Construct the URL
$url = "https://c00eaa0f-943f-4b6b-b6ee-5b7de51f4b30-00-27nfej08x45xr.kirk.replit.dev/pages/$postid.php";

// Make the HTTP request and retrieve the response
$response = @file_get_contents($url);

// Check if there's a valid response
if ($response === false) {
    // Error fetching data, return 404
    http_response_code(404);
    echo '404 Not Found: Error fetching data';
} else {
    // Output the response
    echo $response;
}

// Flush the output buffer
ob_end_flush();
?>
</div>

<?php include "../../static/commons/footer.php"; ?>