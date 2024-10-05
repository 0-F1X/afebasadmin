<?php
// Inclure le fichier de connexion à la base de données
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $matchDate = $_POST['matchDate'];
    $matchName = $_POST['matchName'];
    $matchTime = $_POST['matchTime'];
    $matchLocation = $_POST['matchLocation'];
    $region = $_POST['region'];

    // Préparer la requête d'insertion
    $stmt = $pdo->prepare("INSERT INTO matches (match_date, match_name, match_time, match_location, region) VALUES (?, ?, ?, ?, ?)");
    
    // Exécuter la requête
    if ($stmt->execute([$matchDate, $matchName, $matchTime, $matchLocation, $region])) {
        echo "Match ajouté avec succès.";
        // Redirection ou message de succès
        header("Location: resulandmatch.php");
        exit();
    } else {
        echo "Erreur lors de l'ajout du match.";
    }
}