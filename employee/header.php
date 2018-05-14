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
  <link href="../style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand logo-desktop" href="index.php?page=home"><h1 class="employee-heading">Tidsbokning</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown operations-page">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lediga tider</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="index.php?page=school">Skola</a>
          <a class="dropdown-item" href="index.php?page=care">Vård &amp; Omsorg</a>
          <a class="dropdown-item" href="index.php?page=restaurant">Restaurang och Hotell</a>
          <a class="dropdown-item" href="index.php?page=economy">Ekonomi</a>
          <a class="dropdown-item" href="index.php?page=cleaning">Lokalvård</a>
          <a class="dropdown-item" href="index.php?page=retail">Detaljhandel</a>
          <a class="dropdown-item" href="index.php?page=construction">Bygg</a>
        </div>
      </li>
        <li class="nav-item employee-page">
          <a href="employee-logout.php" class="nav-link employee-logout">Logga ut</a>
        </li>

    </div>
  </div>
</nav>
