<?php
 // Inclure le fichier de connexion à la base de données
 require_once 'db.php';

 // Récupérer le classement de Madagascar (5 premiers)
 $stmt_mada = $pdo->prepare("SELECT * FROM classement WHERE region = 'madagascar' ORDER BY points DESC LIMIT 5");
 $stmt_mada->execute();
 $classement_mada = $stmt_mada->fetchAll(PDO::FETCH_ASSOC);

 // Récupérer le classement de La Réunion (5 premiers)
 $stmt_reunion = $pdo->prepare("SELECT * FROM classement WHERE region = 'la-reunion' ORDER BY points DESC LIMIT 5");
 $stmt_reunion->execute();
 $classement_reunion = $stmt_reunion->fetchAll(PDO::FETCH_ASSOC);