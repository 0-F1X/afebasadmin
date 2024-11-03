<?php
require_once 'server/trait-two-classement.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>afebas/admin</title>
    <link rel="shortcut icon" href="./asset/images/Logo.png" type="image/x-icon">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="stylesheet" href="./asset/css/style2.css">
    <link rel="stylesheet" href="./asset/css/style3.css">
    <link rel="stylesheet" href="./asset/css/dash.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="./asset/images/Logo.png" alt="" style="width: 50px;" alt="logo">
                </div>
                <div class="sidebar-brand-text mx-3" style="letter-spacing: 4px; font-weight: bold;">AFEBAS</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Action
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="./equipe.html">
                    <i class="fas fa-futbol"></i>
                    <span> EQUIPE</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="./resulandmatch.php">
                    <i class="fas fa-futbol"></i>
                    <span>Resulats des Matchs</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="./calendrier.php">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Calendrier des Matchs</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="./ecommerce.php">
                    <i class="fas fa-shopping-cart"></i>
                    <span> Boutique </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="./classement.html">
                    <i class="fas fa-trophy"></i>
                    <span>Classement</span>
                </a>
                <div id="collapseUtilitie" class="collapse" aria-labelledby="headingUtilitie"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href=""><i class="fas fa-map-marker-alt"></i> Madagascar</a>
                        <a class="collapse-item" href=""><i class="fas fa-map-marker-alt"></i> La Réunion</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Autres
            </div>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-cog"></i>
                    <span>Paramètre du Compte</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Déconnexion</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </nav>
                <br> <br>
                <div class="container">
                    <!-- Formulaire d'ajout au classement -->
                    <div class="container mt-4">
                        <!-- Formulaire d'ajout au classement -->
                        <div class="form-container">
                            <h2>Ajouter un joueur au classement</h2>
                            <form action="./server/trait-classement.php" method="post">
                                <div class="mb-3">
                                    <label for="region" class="form-label">Région</label>
                                    <select id="region" name="region" class="form-control" required>
                                        <option value="" disabled selected>Choisir une région</option>
                                        <option value="madagascar">Madagascar</option>
                                        <option value="la-reunion">La Réunion</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="tournament" class="form-label">Tournoi/Championnat</label>
                                    <input type="text" class="form-control" id="tournament" name="tournament"
                                        placeholder="Nom du tournoi ou championnat" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nom et Prénom</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nom et prénom du joueur" required>
                                </div>
                                <div class="mb-3">
                                    <label for="points" class="form-label">Points</label>
                                    <input type="number" class="form-control" id="points" name="points"
                                        placeholder="Nombre de points" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter au classement</button>
                            </form>
                        </div>

                        <style>
                            /* Conteneur des classements */
                            .classements-container {
                                display: block;
                                margin-top: 20px;
                            }

                            /* Tableaux pour Madagascar et La Réunion */
                            .classement-madagascar,
                            .classement-reunion {
                                margin-bottom: 20px;
                                width: 100%;
                            }

                            .table {
                                width: 100%;
                                text-align: left;
                                border-collapse: collapse;
                            }

                            /* Style pour les en-têtes */
                            .table th {
                                background-color: #333;
                                /* Noir */
                                color: #fff;
                                /* Blanc */
                                padding: 10px;
                            }

                            /* Style pour les cellules */
                            .table td {
                                padding: 10px;
                                border: 1px solid #ddd;
                                color: #000;
                                /* Noir */
                            }

                            /* Couleur des lignes paires */
                            .table tbody tr:nth-child(even) {
                                background-color: #f2f2f2;
                                /* Gris clair */
                            }

                            /* Couleur des lignes impaires */
                            .table tbody tr:nth-child(odd) {
                                background-color: #fff;
                                /* Blanc */
                            }

                            /* Style pour les titres des tableaux */
                            h3 {
                                color: #333;
                                /* Noir */
                                font-weight: bold;
                            }

                            /* Style du formulaire */
                            .form-container {
                                margin-bottom: 20px;
                            }

                            .form-container h2 {
                                color: #333;
                                /* Noir */
                            }

                            .form-container form input,
                            .form-container form select,
                            .form-container form button {
                                display: block;
                                width: 100%;
                                margin-bottom: 10px;
                                padding: 10px;
                                border-radius: 5px;
                                border: 1px solid #ccc;
                            }

                            .form-container form button {
                                background-color: #333;
                                /* Noir */
                                color: #fff;
                                /* Blanc */
                                border: none;
                            }
                        </style>



                        <div class="classements-container">
                            <!-- Classement Madagascar -->
                            <div class="classement-madagascar">
                                <h3>Classement - Madagascar</h3>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Numéro</th>
                                            <th>Tournoi/Championnat</th>
                                            <th>Nom et Prénom</th>
                                            <th>Points Madagascar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Affichage des 5 premiers joueurs du classement Madagascar -->
                                        <?php
                                        // Assurez-vous que cette variable correspond à celle que vous avez définie lors de la récupération des données
                                        foreach ($classement_mada as $index => $joueur) {
                                            if ($index < 5) {
                                                echo "<tr>
                                                <td>" . ($index + 1) . "</td>
                                                <td>" . $joueur['tournoi'] . "</td>
                                                <td>" . $joueur['nom_prenom'] . "</td>
                                                <td>" . $joueur['points'] . "</td>
                                                </tr>";
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Classement La Réunion -->
                            <div class="classement-reunion">
                                <h3>Classement - La Réunion</h3>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Numéro</th>
                                            <th>Tournoi/Championnat</th>
                                            <th>Nom et Prénom</th>
                                            <th>Points La Réunion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Affichage des 5 premiers joueurs du classement La Réunion -->
                                        <?php
                                        foreach ($classement_reunion as $index => $joueur) {
                                            if ($index < 5) {
                                                echo "<tr>
                                <td>" . ($index + 1) . "</td>
                                <td>" . $joueur['tournoi'] . "</td>
                                <td>" . $joueur['nom_prenom'] . "</td>
                                <td>" . $joueur['points'] . "</td>
                            </tr>";
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>