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
                    <span> Résultats des Matchs</span>
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
                <a class="nav-link collapsed" href="./classement.php">
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

                <?php
                require_once './server/db.php';

                // Initialisation des variables pour éviter les erreurs d'affichage
                $match_date = isset($_POST['match_date']) ? htmlspecialchars($_POST['match_date']) : '';
                $match_team = isset($_POST['match_team']) ? htmlspecialchars($_POST['match_team']) : '';
                $region = isset($_POST['region']) ? htmlspecialchars($_POST['region']) : '';

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Récupérer les données du formulaire
                    $date_result = $_POST['match_date'];
                    $equipe = $_POST['match_team'];
                    $points = $_POST['match_points'];
                    $score = $_POST['match_score'];
                    $region = $_POST['region'];

                    // Insérer les données dans la table 'resultats'
                    $stmt = $pdo->prepare("INSERT INTO resultats (date_result, equipe, points, score, region) VALUES (?, ?, ?, ?, ?)");
                    $stmt->execute([$date_result, $equipe, $points, $score, $region]);
                }
                ?>

                <style>
                    .principal {
                        display: flex;
                        /* Utilisation de Flexbox pour aligner les enfants */
                        justify-content: space-between;
                        /* Espace entre les deux divs */
                    }

                    .first,
                    .second {
                        flex: 1;
                        /* Chaque div prend une part égale de l'espace disponible */
                        margin: 10px;
                        /* Marge pour espacer les divs */
                    }

                    .form-container {
                        padding: 15px;
                        /* Ajout de padding pour le contenu du formulaire */
                        border: 1px solid #ccc;
                        /* Bordure pour visualiser la div */
                        border-radius: 5px;
                        /* Coins arrondis */
                    }

                    .table {
                        width: 100%;
                        /* Largeur complète pour la table */
                    }
                </style>

                <div>
                    <div class="principal">
                        <!-- Résultats de Match -->
                        <div class="first">
                            <div class="form-container">
                                <h2>Résultats de Match</h2>
                                <form method="post">
                                    <div class="form-group">
                                        <label for="match-date"><i class="fas fa-calendar-alt"></i> Date du Match</label>
                                        <input type="date" id="match-date" name="match_date" value="<?= $match_date ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="match-team"><i class="fas fa-users"></i> Match</label>
                                        <input type="text" id="match-team" name="match_team" value="<?= $match_team ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="match-points"><i class="fas fa-trophy"></i> Points</label>
                                        <input type="number" id="match-points" name="match_points" placeholder="Ex: 3 - 2" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="match-score"><i class="fas fa-futbol"></i> Score</label>
                                        <input type="text" id="match-score" name="match_score" placeholder="Ex: 12 - 10" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="region"><i class="fas fa-map-marker-alt"></i> Région</label>
                                        <select id="region" name="region" required>
                                            <option value="" disabled <?= empty($region) ? 'selected' : '' ?>>Choisir une région</option>
                                            <option value="madagascar" <?= $region == 'madagascar' ? 'selected' : '' ?>>Madagascar</option>
                                            <option value="la-reunion" <?= $region == 'la-reunion' ? 'selected' : '' ?>>La Réunion</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Ajouter Résultat">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Affichage des résultats -->
                        <div class="second">
                            <h2 class="text-center">AFFICHAGE</h2>
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Date</th>
                                        <th>Match</th>
                                        <th>Points</th>
                                        <th>Score</th>
                                        <th>Région</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Récupérer les résultats de la base de données
                                    $sql = "SELECT date_result, equipe, points, score, region FROM resultats";
                                    $stmt = $pdo->query($sql);
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($row['date_result']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['equipe']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['points']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['score']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['region']) . "</td>";
                                        echo "</tr>";
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

    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; AFEBAS ADMIN By Impulse Digital Experience Agency</span>
            </div>
        </div>
    </footer>
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