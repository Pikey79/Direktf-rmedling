<?php

// Create connection
$db = mysqli_connect("localhost", "root", "", "direkformedling");
//$db = mysqli_connect("direktformedling.se.mysql", "direktformedling_se", "BH6kwwpaeL3WQhikpDx9NQj3", "direktformedling_se");

mysqli_query($db, "SET NAMES utf8");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>
