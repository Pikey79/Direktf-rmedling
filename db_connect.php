<?php

// Create connection
$db = mysqli_connect("localhost", "root", "", "direkformedling");
//$db = mysqli_connect("abbashodroj-219305.mysql.binero.se", "219305_im16622", "hodroj13", "219305-abbashodroj");

mysqli_query($db, "SET NAMES utf8");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>
