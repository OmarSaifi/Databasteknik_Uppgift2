
<h2 class='text-left'>
<a href='index.php'>
    Tryck på detta för att komma till hemsidan.
</a></h2>

<?php

echo "<h3 class='text-left'>
    Din Beställning!
    </h3>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once ("database.php");

    $name           = htmlspecialchars (filter_var($_POST['name'], FILTER_SANITIZE_STRING));
    $telefonnummer  = htmlspecialchars (filter_var($_POST['telefonnummer'], FILTER_SANITIZE_STRING));
    $epostadress    = htmlspecialchars ($_POST['epost'] );
    $leveransadress = htmlspecialchars (filter_var($_POST['leveransadress'], FILTER_SANITIZE_STRING));
    
    $epostadress = filter_var($epostadress, FILTER_SANITIZE_EMAIL);

    if (!filter_var($epostadress, FILTER_VALIDATE_EMAIL) === false) {
        echo("$epostadress Mailadressen är korrekt");
    } else {
        echo("$epostadress Mailadressen är inte korrekt");
        die;
    }

    
    // Skapa en SQL-sats (förbereda en sats)
    $stmt = $conn->prepare("INSERT INTO kunder (namn, telefonnummer, epostadress, leveransadress)
                                VALUES (:namn , :telefonnummer , :epostadress , :leveransadress)");

    // Binda parametrar (binda variabler med platshållare)
    $stmt->bindParam(':namn', $name);
    $stmt->bindParam(':telefonnummer', $telefonnummer);
    $stmt->bindParam(':epostadress', $epostadress);
    $stmt->bindParam(':leveransadress', $leveransadress);

    // Kör SQL-sats
    $stmt->execute();

    // Hämta sista id som infogats A_I
    $last_id = $conn->lastInsertId();

    $last_idd = $_POST['produktid'];
    
    $stmt = $conn->prepare("INSERT INTO orders (kundid, produktid)
    VALUES (:kundid,:produktid)");
    $stmt->bindParam(':kundid', $last_id);
    $stmt->bindParam(':produktid', $last_idd);

    $stmt->execute();
    
    $last_id = $conn->lastInsertId();
}

?>
<br><br>

<?php

if(isset($name , $telefonnummer , $epostadress , $leveransadress)) echo "<b><h3>Tack för din beställning! Din order har skickats iväg. Ditt ordernummer är: $last_id</h3> 
    <br>
    Här får du en kopia på ditt namn, telefonnummer, e-postadress och leveransadress: <br>
    <br>
    Namn: $name <br>
    Telefonnummer: $telefonnummer <br>
    Epostadress: $epostadress <br>
    Leveransadress: $leveransadress";
?>