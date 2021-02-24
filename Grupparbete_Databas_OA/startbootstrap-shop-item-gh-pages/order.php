
<?php

echo "<h3 class='text-left'>
    Dina Uppgifter
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
}

?>


<form action="bekräftelse_order.php" class="row" method="post">
<input type="hidden" name="produktid" value="<?php echo $value['produktid'] ?>">

<div class="col-md-6 my-2">
    <input type="text" class="form-control" name="name" placeholder="För- och efternamn" required>
</div>

<div class="col-md-6 my-2">
    <input type="text" class="form-control" name="telefonnummer" placeholder="Telefon" required>
</div>

<div class="col-md-6 my-2">
    <input type="email" class="form-control" name="epost" placeholder="Din e-postadress">
</div>

<div class="col-md-6 my-2">
    <input type="leveransadress" class="form-control" name="leveransadress" placeholder="Leveransadress" required>
</div>

<div class="col-md-4">
    <input type="submit" class="form-control btn btn-success" value="Skicka Beställning">
</div>

<div style ="text-align:right" class = "col-md-8">
    <a href='Admin/Admin_Order/admin_order.php'><button type="button" class="btn btn-primary btn-md">Admin</button></a>
</div>

</form>