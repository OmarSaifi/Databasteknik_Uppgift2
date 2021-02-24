
<h2 class='text-left'>
<a href='index.php'>
    Tryck på detta för att komma till hemsidan.
</a></h2>

<?php

echo "<h3 class='text-left'>
    Ditt Meddelande!
    </h3>";

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

    
    // Skapa en SQL-sats (förbereda en sats)
    $stmt = $conn->prepare("INSERT INTO kontakt (namn, epost, meddelande)
                                VALUES (:namn , :epost , :meddelande)");

    // Binda parametrar (binda variabler med platshållare)
    $stmt->bindParam(':namn', $name);
    $stmt->bindParam(':epost', $epost);
    $stmt->bindParam(':meddelande', $meddelande);

    // Kör SQL-sats
    $stmt->execute();

    // Hämta sista id som infogats A_I
    $last_id = $conn->lastInsertId();

    $message = "<div class='alert alert-success' role='alert'>
                    <p>$name har sparats i databasen med id=$last_id</p>
                </div>";

    echo "<p>New record created successfully.
    <br>Last inserted ID is: $last_id </p>";
}

?>
<br><br>

<?php

if(isset($name , $epost , $meddelande)) echo "<b><h3> Tack! Ditt Meddelande har skickats.</h3>
    <br>
    Här får du en kopia på ditt namn, epost och meddelande du har skickat in:<br>
    <br>
    Namn: $name <br>
    Epost: $epost <br>
    Meddelande: $meddelande";
?>