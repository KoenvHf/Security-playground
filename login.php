<?php
$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];

$verbinding = new mysqli("localhost", "root", "", "security_playground");

$sql = "SELECT * FROM gebruikers WHERE gebruikersnaam = '$gebruikersnaam' AND wachtwoord = '$wachtwoord'";
$resultaat = $verbinding->query($sql);

if ($resultaat->num_rows > 0) {
    echo "Inloggen gelukt! welkom, " . $gebruikersnaam;
}
else {
    echo "Inloggen mislukt. Verkeerde gebruikersnaam of wachtwoord."; 
}
?>
