<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "direkformedling");
//$conn = mysqli_connect("direktformedling.se.mysql", "direktformedling_se", "BH6kwwpaeL3WQhikpDx9NQj3", "direktformedling_se");


mysqli_query($conn, "SET NAMES utf8");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>
