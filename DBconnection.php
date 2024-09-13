<?php
$servername = "localhost";
$username = "username";
$password = "12Nairesan,,";
$dbname = "IAP";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>