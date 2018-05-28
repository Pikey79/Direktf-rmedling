<!DOCTYPE html>
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
	<link href="style.css" rel="stylesheet">
</head>
<body>

<!-- Popup -->
<div class="black-overlay"></div>
<div class="success-popup">Tack för din ansökan!<div class="popup-button">Stäng</div></div>
<div class="unsuccess-popup"><span>Fel filformat, ansökan ej skickad!</span><hr>Tillåtna filformat: pdf, doc, docx eller txt<div class="popup-button">Stäng</div></div>

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
				<li class="nav-item home-page">
					<a class="nav-link" href="index.php?page=home">Hem</a>
				</li>
				<li class="nav-item dropdown operations-page">
					<a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Verksamheter</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="index.php?page=school">Skola</a>
						<a class="dropdown-item" href="index.php?page=care">Vård &amp; Omsorg</a>
						<a class="dropdown-item" href="index.php?page=restaurant">Hotell & Restaurang</a>
						<a class="dropdown-item" href="index.php?page=economy">Bokföring & Redovisning</a>
						<a class="dropdown-item" href="index.php?page=cleaning">Lokalvård</a>
						<a class="dropdown-item" href="index.php?page=retail">Detaljhandel</a>
						<!--<a class="dropdown-item" href="index.php?page=construction">Bygg</a>-->
					</div>
				</li>
				<li class="nav-item application-page">
					<a class="nav-link" href="index.php?page=application">Sök jobb</a>
				</li>
				<li class="nav-item search-staff-page">
					<a class="nav-link" href="index.php?page=search-staff">Sök personal</a>
				</li>
				<li class="nav-item about-us-page">
					<a class="nav-link" href="index.php?page=about-us">Om oss</a>
				</li>
				<li class="nav-item contact-page">
					<a class="nav-link" href="index.php?page=contact">Kontakt</a>
				</li>
				<li class="nav-item employee-page">
					<a class="nav-link" href="index.php?page=employee">Anställd</a>
				</li>

		</div>
	</div>
</nav>
