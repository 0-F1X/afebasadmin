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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

                <div class="container">
                    <div class="form-container">
                        <h2>Ajouter un Match</h2>
                        <form action="./server/trait-match.php" method="post">
                            <div class="mb-3">
                                <label for="matchDate" class="form-label">Date du match</label>
                                <input type="date" class="form-control" id="matchDate" name="matchDate" required>
                            </div>

                            <div class="mb-3">
                                <label for="matchName" class="form-label">Match</label>
                                <input type="text" class="form-control" id="matchName" name="matchName"
                                    placeholder="Ex: Match 1 ou Match 2" required>
                            </div>

                            <div class="mb-3">
                                <label for="matchTime" class="form-label">Heure du match</label>
                                <input type="time" class="form-control" id="matchTime" name="matchTime" required>
                            </div>

                            <div class="mb-3">
                                <label for="matchLocation" class="form-label">Lieu du match</label>
                                <input type="text" class="form-control" id="matchLocation" name="matchLocation"
                                    placeholder="Ex: Salle de Billard A" required>
                            </div>

                            <div class="mb-3">
                                <label for="region" class="form-label">Région</label>
                                <select id="region" name="region" class="form-control" required>
                                    <option value="" disabled selected>Choisir une région</option>
                                    <option value="madagascar">Madagascar</option>
                                    <option value="la-reunion">La Réunion</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Enregistrer le match</button>
                        </form>

                    </div>

                    <!-- Séparateur -->
                    <div class="separator"></div>

                    <?php
                    // Inclure le fichier de connexion à la base de données
                    require './server/db.php';

                    // Requête pour récupérer tous les matchs
                    $stmt = $pdo->query("SELECT * FROM matches");
                    $matches = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    ?>

                    <!-- Formulaire Matchs à Venir -->
                    <div class="form-container my-4">
                        <h2 class="text-center">Matchs à Venir</h2>
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Date</th>
                                    <th>Match</th>
                                    <th>Heure</th>
                                    <th>Lieu</th>
                                    <th>Région</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <style>
                                .end {
                                    text-decoration: none;
                                    color: white;
                                }

                                .end:hover {
                                    text-decoration: none;
                                    color: white;
                                }
                            </style>
                            <tbody>
                                <?php foreach ($matches as $match): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($match['match_date']); ?></td>
                                        <td><?= htmlspecialchars($match['match_name']); ?></td>
                                        <td><?= htmlspecialchars($match['match_time']); ?></td>
                                        <td><?= htmlspecialchars($match['match_location']); ?></td>
                                        <td><?= htmlspecialchars($match['region']); ?></td>
                                        <td>
                                            <button class="btn btn-danger">
                                                <a href="resulandmatch.php?date=<?= urlencode($match['match_date']); ?>&team=<?= urlencode($match['match_name']); ?>&region=<?= urlencode($match['region']); ?>" class="end">Terminer</a>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>