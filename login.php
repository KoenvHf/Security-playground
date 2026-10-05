<?php
$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];

$verbinding = new mysqli("localhost", "root", "", "security_playground");

$stmt = $verbinding->prepare("SELECT * FROM gebruikers WHERE gebruikersnaam = ? AND wachtwoord = ?");
$stmt->bind_param("ss", $gebruikersnaam, $wachtwoord);

$stmt->execute();
$resultaat = $stmt->get_result();

if ($resultaat->num_rows > 0) {
    echo "Inloggen gelukt! welkom, " . htmlspecialchars($gebruikersnaam);
}
else {
    echo "Inloggen mislukt. Verkeerde gebruikersnaam of wachtwoord."; 
}
?>
