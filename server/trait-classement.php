<?php
// Inclure le fichier de connexion à la base de données
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $region = $_POST['region'];
    $tournament = $_POST['tournament'];
    $name = $_POST['name'];
    $points = $_POST['points'];

    // Validation simple des données
    if (!empty($region) && !empty($tournament) && !empty($name) && is_numeric($points)) {
        try {
            // Préparer la requête d'insertion
            $stmt = $pdo->prepare("INSERT INTO classement (region, tournoi, nom_prenom, points) VALUES (:region, :tournament, :name, :points)");

            // Lier les paramètres
            $stmt->bindParam(':region', $region);
            $stmt->bindParam(':tournament', $tournament);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':points', $points);

            // Exécuter la requête
            $stmt->execute();

            echo "Le joueur a été ajouté avec succès !";
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout du joueur : " . $e->getMessage();
        }
    } else {
        echo "Veuillez remplir tous les champs correctement.";
    }
}