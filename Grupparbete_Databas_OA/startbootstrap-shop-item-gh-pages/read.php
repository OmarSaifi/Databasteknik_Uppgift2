<?php

/****************************************
 * 
 *                READ
 * Läs tabellen contacts från databasen
 * Presentera resultatet i en HTML-tabell
 * 
 ***************************************/

 // Hämta $conn (en instans av PDO)
 require_once ("database.php");

 // Förbered en SQL-sats
 $stmt = $conn->prepare("SELECT * FROM produkt");

 // Kör SQL-satsen
 $stmt->execute();

 // Hämta alla rader som finns i contacts
 // fetchAll()
 // Returns an array containing all of the result set rows
 $result = $stmt->fetchAll();

$table = "";
foreach ($result as $key => $value) {
    $id = $value['produktid'];
    $table .= "


<div class='col-lg-4'>
<div class='card h-100'>

<a href='../bilder grupparbete/$value[bild]'><img src= '../bilder grupparbete/$value[bild]'  class='img-fluid' width='590' height='600'></a>
  <div class='card-body'>
    <h4 class='card-title'>
     $value[produkt]</h4>
    <h5>$value[pris] kr</h5>
    <p class='card-text'>$value[beskrivning]</p>
    <button  class='btn btn-info btn btn-primary btn-lg'><a class='text-dark' href='köpinfo.php?produktid=$id'>KÖP</a></button>
  </div>
</div>
</div>
<br>
<br>
  ";
}


echo $table;

 /*
 echo "<hr><pre>";
 print_r($result);
 echo "</pre>";
 */
