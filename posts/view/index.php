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
      echo '<h1>404 Not Found: No post ID provided</h1>';
      exit(); // Exit after sending error message
  }

  // Construct the URL
  $url = "https://c00eaa0f-943f-4b6b-b6ee-5b7de51f4b30-00-27nfej08x45xr.kirk.replit.dev/pageinfo/$postid.json";

  try {
      // Make the HTTP request and retrieve the response
      $response = file_get_contents($url);

      // Check if there's a valid response
      if ($response === false) {
          // Error fetching data, return 404
          http_response_code(404);
          echo '404 Not Found: Error fetching data';
      } else {
          // Decode the JSON response
          $jsonData = json_decode($response, true);

          // Check if JSON decoding was successful
          if ($jsonData === null) {
              http_response_code(500);
              echo '500 Internal Server Error: Error parsing JSON';
          } else {
              // Output the title as <h1>
              echo '<h1>' . $jsonData['title'] . '</h1>';
          echo '<h3>By ' . $jsonData['author'] . '</h3>';

              // Output the content
              echo htmlspecialchars_decode($jsonData['content']);

              // Output the author as <h2>
          }
      }
  } catch (Exception $e) {
      // Handle exceptions, such as invalid URLs or server errors
      http_response_code(500); // Internal Server Error
      echo '500 Internal Server Error: ' . $e->getMessage();
  }

  // Flush the output buffer
  ob_end_flush();
  ?>
  </div>



<?php include "../../static/commons/footer.php"; ?>