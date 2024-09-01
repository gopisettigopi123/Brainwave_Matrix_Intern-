<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ims480";

// Create connection
$conn =  mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
