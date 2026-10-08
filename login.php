<?php
$ip = $_SERVER['REMOTE_ADDR'];
$bestand = "/tmp/pogingen_" . $ip . ".txt";

$aantal = 0;
$laatste = 0;
if (file_exists($bestand)) {
    $data = explode(",", file_get_contents($bestand));
    $aantal = (int)$data[0];
    $laatste = (int)$data[1];
}

if (time() - $laatste > 30) {
    $aantal = 0;
}

if ($aantal >= 3) {
    echo "Te veel pogingen. Probeer het over 30 seconden opnieuw.";
    exit;
}

$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];
require 'db.php';

$stmt = $verbinding->prepare("SELECT * FROM gebruikers WHERE gebruikersnaam = ? AND wachtwoord = ?");
$stmt->bind_param("ss", $gebruikersnaam, $wachtwoord);
$stmt->execute();
$resultaat = $stmt->get_result();

if ($resultaat->num_rows > 0) {
    if (file_exists($bestand)) {
        unlink($bestand);
    }
    echo "Inloggen gelukt! welkom, " . htmlspecialchars($gebruikersnaam);
} else {
    $aantal = $aantal + 1;
    file_put_contents($bestand, $aantal . "," . time());
    echo "Inloggen mislukt. Verkeerde gebruikersnaam of wachtwoord.";
}
?>
