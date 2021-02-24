<?php

require_once ("../../database.php");

echo "<h2 class='text-left'>
<a href='../../index.php'>
    Modern Kitchen AB
</a>";

echo "<h2>Ta bort</h2>";

$sql = "DELETE FROM kontakt";
$stmt = $conn->prepare($sql);
$stmt->execute();


$message = "<div class='alert alert-danger' role='alert'>
                <p>Alla poster har raderats!</p>
            </div>";  

echo $message;