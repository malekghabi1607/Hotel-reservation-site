<?php
// Récupérer les données de la réservation depuis la requête POST
$ID = $_POST['ID'];
$Nom = $_POST['Nom'];
$Prenom = $_POST['prenom'];
$Taille_de_la_chambre = $_POST['Taille_de_la_chambre'];
$Date_du_sejour = $_POST['Date_du_sejour'];

// Construire la chaîne de données de la réservation
$reservationData = "$ID,$Nom,$Prenom,$Taille_de_la_chambre,$Date_du_sejour\n";

// Enregistrer les données de la réservation dans le fichier reservations.txt
$file = fopen("reservations.txt", "a");
fwrite($file, $reservationData);
fclose($file);

// Répondre avec la liste mise à jour des réservations
$reservations = file("reservations.txt", FILE_IGNORE_NEW_LINES);
foreach ($reservations as $reservation) {
    $details = explode(",", $reservation);
    echo "<tr>";
    foreach ($details as $detail) {
        echo "<td>$detail</td>";
    }
    echo "</tr>";
}
?>