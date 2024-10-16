<?php
// Fichier : ajouter_produit.php

// Inclure la connexion à la base de données
require_once 'db.php'; // Assurez-vous que le chemin est correct

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prix = $_POST['prix']; // Prix ajouté au traitement

    // Vérifiez si un fichier a été téléchargé
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Chemin du répertoire de destination pour les images
        $uploadDir = '../uploads/';
        // Générer un nom de fichier unique
        $imageName = uniqid() . '_' . basename($_FILES['image']['name']);
        $uploadFilePath = $uploadDir . $imageName;

        // Déplacer le fichier téléchargé vers le répertoire de destination
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFilePath)) {
            try {
                // Préparer la requête d'insertion
                $stmt = $pdo->prepare("INSERT INTO produits (nom, description, prix, image) VALUES (:nom, :description, :prix, :image)");
                // Exécuter la requête
                $stmt->execute([
                    ':nom' => $nom,
                    ':description' => $description,
                    ':prix' => $prix,
                    ':image' => $imageName
                ]);

                // Redirection après l'ajout réussi
                header("Location: ../ecommerce.php?success=1");
                exit();
            } catch (PDOException $e) {
                echo "Erreur lors de l'ajout du produit : " . $e->getMessage();
            }
        } else {
            echo "Erreur lors du téléchargement de l'image.";
        }
    } else {
        echo "Aucun fichier d'image téléchargé ou erreur lors du téléchargement.";
    }
}
?>
