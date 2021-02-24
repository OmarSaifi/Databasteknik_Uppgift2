<!-- Bootstrap core CSS -->
<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../css/shop-item.css" rel="stylesheet">


<h2 class='text-left'>
<a href='../../index.php'>
    Modern Kitchen AB
</a></h2>



<?php

 // Hämta $conn (en instans av PDO)
 require_once ("../../database.php");

 // Förbered en SQL-sats
 $stmt = $conn->prepare("SELECT * FROM kontakt");

 // Kör SQL-satsen
 $stmt->execute();

 // Hämta alla rader som finns i contacts
 $result = $stmt->fetchAll();

 $table = "
    <table class='table table-hover'>
    <tr>
        <th>Namn</th>
        <th>E-post</th>
        <th>Meddelande</th>
        <th>Admin</th>
    </tr>
    ";

 foreach($result as $key => $value){


    $id = $value['kontaktid'];  // Detta är en primärnyckel

    $table .= "
        <tr>
            <td>$value[namn]</td>
            <td>$value[epost]</td>
            <td>$value[meddelande]</td>
            <td>
                <a href='delete_kontakt.php?id=$value[kontaktid]'>Ta bort</a>
            </td>
        </tr>
    ";
 }

 $table .= "</table>";

 echo $table;

 ?>

 <br><br>

 <a href='deleteall_kontakt.php' class="btn btn-md btn-outline-danger">
        Ta bort allt
 </a>
 