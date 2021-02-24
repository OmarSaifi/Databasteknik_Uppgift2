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
 $stmt = $conn->prepare("SELECT * FROM kunder");

 // Kör SQL-satsen
 $stmt->execute();

 // Hämta alla rader som finns i kunder
 $result = $stmt->fetchAll();

 $table = "
    <table class='table table-hover'>
    <tr>
        <th>Namn</th>
        <th>telefonnummer</th>
        <th>epostadress</th>
        <th>leveransadress</th>
        <th>Admin</th>
    </tr>
    ";

 foreach($result as $key => $value){


    $id = $value['kundid'];  // Detta är en primärnyckel

    $table .= "
        <tr>
            <td>$value[namn]</td>
            <td>$value[telefonnummer]</td>
            <td>$value[epostadress]</td>
            <td>$value[leveransadress]</td>
            <td>
                <a href='delete_order.php?id=$value[kundid]'>Ta bort</a>
            </td>
        </tr>
    ";
 }

 $table .= "</table>";

 echo $table;

 ?>

 <br><br>

 <a href='deleteall_order.php' class="btn btn-md btn-outline-danger">
        Ta bort allt
 </a>