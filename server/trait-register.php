<?php

require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mdp = $_POST['password'];
    $nmdp = $_POST['confirm_password'];

    if ($mdp !== $nmdp) {
        die("Les mots de passe ne correspondent pas.");
    }

    // Hachage du mot de passe
    $mdp_hash = password_hash($mdp, PASSWORD_DEFAULT);

    try {
        // Préparer la requête d'insertion
        $stmt = $pdo->prepare("INSERT INTO infosuser (nom, mail, mdp, nmdp) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nom, $email, $mdp_hash, $nmdp]);

        echo "Inscription réussie !";
    } catch (PDOException $e) {
        // Gérer les erreurs (par exemple, si l'email est déjà utilisé)
        echo "Erreur : " . $e->getMessage();
    }
}
