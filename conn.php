<?php
$servername = "localhost";
$username = "websiteAccess";
$password = "Woody3120!";
$dbname = "website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}