<?php
  session_start();

  // Unset all session variables
  session_unset();

  // Destroy the session data on the server
  session_destroy();

  // Redirect to the homepage
  header("Location: index.php");
  exit();
?>