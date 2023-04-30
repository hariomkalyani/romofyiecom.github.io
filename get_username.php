<?php
  // Retrieve the user name from the server
  $username = $_SERVER['username'];
  
  // Return the user name as a JSON object
  header('Content-Type: application/json');
  echo json_encode(array('username' => $username));
?>
