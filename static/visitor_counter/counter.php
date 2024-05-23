<?php
  // Start the session
  session_start();

  // Path to the counter file
  $file = $_SERVER['DOCUMENT_ROOT'].'/static/visitor_counter/counter.txt';

  // Check if the file exists
  if (!file_exists($file)) {
    // If it doesn't exist, create the file and set the initial count to 0
    file_put_contents($file, '0');
  }

  // Check if the visitor has already been counted in this session
  if (!isset($_SESSION['has_visited'])) {
    // Read the current count from the file
    $count = file_get_contents($file);

    // Increment the count by 1
    $count++;

    // Write the new count back to the file
    file_put_contents($file, $count);

    // Mark this visitor as counted in this session
    $_SESSION['has_visited'] = true;
  }

  // Read the current count (after potentially updating it)
  $count = file_get_contents($file);

  // Display the current count
  $count_string = "This website has been visited by " . $count . " unique people.";
?>