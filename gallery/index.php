<?php
include('connection.php');
session_start(); // Start a new session

// Check if the user is already logged in
if (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] === true) {
  header("location: ../traveldashboard.php"); // Redirect to dashboard if already logged in
  exit;
} else {
  header("location: ../index.php");
}

?>