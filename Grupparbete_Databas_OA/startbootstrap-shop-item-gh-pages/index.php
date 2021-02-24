<!DOCTYPE html>
<html lang="sv">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Kitchen AB</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Modern Kitchen AB</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produkter.php">Produkter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontakt.php">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
  <!-- Page Content -->
<div class="container">

<!-- Jumbotron Header -->
<header class="jumbotron my-4">
  <h1 class="display-3"><b>Toppsäljare</h1>
  <p class="lead"><b>VÅRA MEST SÅLDA PRODUKTER</p>
</header>

<!-- Page Features -->
<div class="row text-center">

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <img class="card-img-top" src="../bilder grupparbete/Blender.jpg" height='210' alt="Blender">
      <div class="card-body">
        <h4 class="card-title">Blender</h4>
        <p class="card-text">En enkel blender som kommer att göra din vardag sundare.</p>
      </div>
      <div class="card-footer">
      <button  class='btn btn-info btn btn-primary btn-lg'><a class='text-dark' href='köpinfo.php?produktid=1'>KÖP</a></button>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <img class="card-img-top" src="../bilder grupparbete/Brödrost.jpg" height='210' alt="Brödrost">
      <div class="card-body">
        <h4 class="card-title">Brödrost</h4>
        <p class="card-text">Starta dagen med nyrostat bröd.</p>
      </div>
      <div class="card-footer">
      <button  class='btn btn-info btn btn-primary btn-lg'><a class='text-dark' href='köpinfo.php?produktid=2'>KÖP</a></button>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <img class="card-img-top" src="../bilder grupparbete/Vattenkokare.jpg" height='210' alt="Vattenkokare">
      <div class="card-body">
        <h4 class="card-title">Vattenkokare</h4>
        <p class="card-text">Bäst prestanda i marknaden enligt Ahmed och Omar.</p>
      </div>
      <div class="card-footer">
      <button  class='btn btn-info btn btn-primary btn-lg'><a class='text-dark' href='köpinfo.php?produktid=10'>KÖP</a></button>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <img class="card-img-top" src="../bilder grupparbete/köksvåg.jpg" height='210' alt="Köksvåg">
      <div class="card-body">
        <h4 class="card-title">Köksvåg</h4>
        <p class="card-text">Väg maten du tillagar för att kunna räkna kalorier.</p>
      </div>
      <div class="card-footer">
      <button  class='btn btn-info btn btn-primary btn-lg'><a class='text-dark' href='köpinfo.php?produktid=5'>KÖP</a></button>
      </div>
    </div>
  </div>

</div>
<!-- /.row -->

</div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>


<?php
  
  require_once ("footer.php");
  
?>