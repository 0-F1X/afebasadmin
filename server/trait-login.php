<?php
// Inclure le fichier de connexion à la base de données
require 'db.php';

session_start(); // Démarrer la session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $mdp = $_POST['password'];

    // Préparer la requête pour récupérer l'utilisateur
    $stmt = $pdo->prepare("SELECT * FROM infosuser WHERE mail = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    // Vérifier si l'utilisateur existe et si le mot de passe est correct
    if ($user && password_verify($mdp, $user['mdp'])) {
        // Authentification réussie
        $_SESSION['user_id'] = $user['id'];
        header("Location: /afebasadmin-master/resulandmatch.php");
        // Rediriger vers resulandmatch.php
        exit();
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
