<?php
// Fichier : ajouter_produit.php

// Inclure la connexion à la base de données
require_once 'db.php'; // Assurez-vous que le chemin est correct

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $description = $_POST['description'];

    // Traitement de l'image
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['image']['tmp_name'];
        $imageName = $_FILES['image']['name'];
        $imageSize = $_FILES['image']['size'];
        $imageType = $_FILES['image']['type'];

        // Définir le chemin où l'image sera stockée
        $uploadDir = '../uploads/'; // Assurez-vous que ce dossier existe
        $imagePath = $uploadDir . basename($imageName);

        // Déplacer le fichier téléchargé
        if (move_uploaded_file($imageTmpPath, $imagePath)) {
            // Préparer la requête d'insertion
            $sql = "INSERT INTO produits (nom, description, image) VALUES (:nom, :description, :image)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':image', $imagePath);

            // Exécuter la requête
            if ($stmt->execute()) {
                echo "Produit ajouté avec succès !";
            } else {
                echo "Erreur lors de l'ajout du produit.";
            }
        } else {
            echo "Erreur lors du téléchargement de l'image.";
        }
    } else {
        echo "Aucune image n'a été téléchargée ou une erreur est survenue.";
    }
}
