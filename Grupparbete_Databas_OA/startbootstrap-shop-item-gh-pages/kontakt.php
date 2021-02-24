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
  <br>
</body>


    <h3><b>Kontaktuppgifter:</h3>
<table border>
        <tr>
            <th>
              Modern Kitchen AB <br><br>

              Besök oss: <br>
              Adress: Drottninggatan 55 <br>
              111 21 Stockholm <br><br>

              Maila oss: <br>
              Epost: info@modernkitchenab.com <br><br>

              Ring oss: <br>
              0734555285 <br><br>

              Öppettider: <br>
              Vardagar: 10-20 <br>
              Lördag: 11-18 <br>
              Söndag: 12-17 <br>

              <br><br>

              Omar Saifi
              Ahmed Rossi
              <br>
            
              <img src="../bilder grupparbete/Omar.jpg" alt="Omar" width="80" height="110">
              <img src="../bilder grupparbete/Ahmed.jpg" alt="Ahmed" width="80" height="110">
            </th>
        </tr>       
<table>

</form>

<br><br>


<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once ("database.php");

    $name       = htmlspecialchars (filter_var($_POST['name'], FILTER_SANITIZE_STRING));
    $epost      = htmlspecialchars ($_POST['epost'] );
    $meddelande = htmlspecialchars (filter_var($_POST['meddelande'], FILTER_SANITIZE_STRING));
    
    $epost = filter_var($epost, FILTER_SANITIZE_EMAIL);

    if (!filter_var($epost, FILTER_VALIDATE_EMAIL) === false) {
        echo("$epost Mailadressen är korrekt");
    } else {
        echo("$epost Mailadressen är inte korrekt");
        die;
    }    
}

?>


<h3><b>Kontaktformulär</h3>

<form action="bekräftelse_kontakt.php" class="row" method="post">

<div class="col-md-3 my-2">
    <input type="text" class="form-control" name="name" placeholder="Namn" required>
</div>

<div class="col-md-3 my-2">
    <input type="email" class="form-control" name="epost" placeholder="E-post">
</div>

<div class="col-md-3 my-2">
    <textarea name="meddelande" cols="30" rows="5" class="form-control" placeholder="Skriv ett meddelande" required></textarea>
</div>

<div class="col-md-3">
    <input type="submit" class="form-control btn btn-success" value="Skicka meddelandet">
</div>

<div style ="text-align:right" class = "col-md-8">
    <a href='Admin/Admin_Kontakt/admin_kontakt.php'><button type="button" class="btn btn-primary btn-md">Admin</button></a>
</div>

</form>

<hr>
<br>

    <h2>Hitta hit</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2034.9572902614411!2d18.059149616045588!3d59.33366688166027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9d675381eab5%3A0x66e2d8c65268f5fe!2sDrottninggatan%2055%2C%20111%2021%20Stockholm!5e0!3m2!1ssv!2sse!4v1613931102092!5m2!1ssv!2sse
        " width="400" height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>"

    <hr>

<?php
    require_once ("footer.php");
?>

</body>
</html>