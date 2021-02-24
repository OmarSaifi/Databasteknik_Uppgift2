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
            <a class="nav-link" href="#">Services</a>
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

</form>

<br><br>


<?php

/****************************************
 * 
 *                READ
 * Läs tabellen contacts från databasen
 * Presentera resultatet i en HTML-tabell
 * 
 ***************************************/

if ($_SERVER["REQUEST_METHOD"] == "GET"){

 // Hämta $conn (en instans av PDO)
 require_once ("database.php");

 $produktID = $_GET['produktid'];

 // Förbered en SQL-sats
 $stmt = $conn->prepare("SELECT * FROM produkt WHERE produktid=$produktID");

 // Kör SQL-satsen
 $stmt->execute();

 // Hämta alla rader som finns i contacts
 // fetchAll()
 // Returns an array containing all of the result set rows
 $result = $stmt->fetchAll();

 $table = "
    <table class='table table-hover'>
    <tr>

    </tr>
    ";

 foreach($result as $key => $value){


    //$id = $value['produktid'];  // Detta är en primärnyckel

    $table .= "
        <tr>
            <tr>
            <td><img src= '../bilder grupparbete/$value[bild]'  class='img-fluid' width=200px></td>
            </tr>

            <tr>
            <td><h4>$value[produkt]</h4></td>
            </tr>

            <tr>
            <td><p>$value[beskrivning]</p></td>
            </tr>
            
            <tr>
            <td><h6>Pris: $value[pris] kr</h6></td>
            </tr>
            
            <tr>
            <td><h6>Lagersaldo: $value[lagersaldo] st</h6></td>
            </tr>
        </tr>
    ";


 }

 $table .= "</table>";

 echo $table;
}

?>

<br><br><br>

<?php

require_once ("order.php");
