<?php
// Fichier : supprimer_produit.php

require_once 'db.php'; // Connexion à la base de données

if (isset($_GET['id'])) {
    // Récupérer l'ID du produit à supprimer
    $id = $_GET['id'];

    // Préparer et exécuter la requête de suppression
    $sql = "DELETE FROM produits WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    // Rediriger vers la page principale après la suppression
    header("Location: ../ecommerce.php");
    exit();
} else {
    // Si l'ID n'est pas fourni, rediriger
    header("Location: ../ecommerce.php");
    exit();
}
