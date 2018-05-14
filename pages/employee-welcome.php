<?php

session_start();
  if(!$_SESSION["login_user"]) {
    header("location:../index.php?page=employee");
  } else {

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Direktformedling AB</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUxHUTVKEDFQEp0tA67cmUUafeolofYpM&callback=initMap"></script>
    	<link href="../style.css" rel="stylesheet">
    	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    	<link rel="manifest" href="/site.webmanifest">
    	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    	<meta name="msapplication-TileColor" content="#da532c">
    	<meta name="theme-color" content="#ffffff">
    </head>
    <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
    	<div class="container-fluid">
    		<a class="navbar-brand logo-desktop" href="index.php?page=home"><img src="img/df/direktformedling_logo.png"></a>
    		<a class="navbar-brand logo-mobile" href="index.php?page=home"><img src="img/df/df_footer_logo.png"></a>
    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarResponsive">
    			<ul class="navbar-nav ml-auto">
    				<li class="nav-item employee-page">
    					<a href="employee-logout.php" class="nav-link">Logga ut</a>
    				</li>

    		</div>
    	</div>
    </nav>';

  }

?>
