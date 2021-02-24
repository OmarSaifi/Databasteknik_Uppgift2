<?php

require_once ("../../database.php");

$id = $_GET['id'];

echo "<h2 class='text-left'>
<a href='../../index.php'>
    Modern Kitchen AB
</a>";

echo "<h2>Ta bort</h2>";


$sql = "DELETE FROM kontakt WHERE kontaktid = :kontaktid";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':kontaktid', $id);
$stmt->execute();
$rowCount = $stmt->rowCount();

$message = "<div class='alert alert-danger' role='alert'>
                <p>$rowCount post har raderats!</p>
            </div>";  

echo $message;

?>

<br>

<a href='admin_kontakt.php'><button>Admin</button></a>
