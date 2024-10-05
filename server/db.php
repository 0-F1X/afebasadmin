<?php
// Fichier : db.php

// Informations de connexion
$host = 'localhost'; // Nom du serveur
$dbname = 'afebasadmin'; // Nom de ta base de données
$username = 'root'; // Nom d'utilisateur par défaut (dans XAMPP)
$password = ''; // Mot de passe par défaut pour root est vide

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Activer les exceptions PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Gestion des erreurs
    die("Erreur de connexion : " . $e->getMessage());
}
