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
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="./asset/images/Logo.png" alt="" style="width: 50px;">
                </div>
                <div class="sidebar-brand-text mx-3" style="letter-spacing: 4px; font-weight: bold;">AFEBAS</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">Action</div>

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
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">Autres</div>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-cog"></i>
                    <span>Paramètre du Compte</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Déconnexion</span>
                </a>
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

                <div class="container mt-5">
                    <div class="row">
                        <!-- Formulaire d'ajout de produit -->
                        <div class="col-md-6">
                            <h3>Ajouter un Produit a vendre</h3>
                            <form action="./server/ajouter_produit.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nom du produit</label>
                                    <input type="text" class="form-control" id="nom" name="nom" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="prix" class="form-label">Prix du produit</label>
                                    <input type="number" class="form-control" id="prix" name="prix" step="0.01" required>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                                    <small class="form-text text-muted">Taille recommandée : 517 x 436 pixels.</small>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter le produit</button>
                            </form>
                        </div>
                        <?php
                        // Fichier : afficher_produits.php

                        require_once './server/db.php';

                        // Récupérer les produits de la base de données
                        $sql = "SELECT * FROM produits";
                        $stmt = $pdo->query($sql);
                        $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        ?>
                        <!-- Liste des produits -->
                        <div class="col-md-6">
                            <h3>Listes Produits</h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Prix</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($produits as $produit): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($produit['nom']); ?></td>
                                            <td><?php echo htmlspecialchars($produit['description']); ?></td>
                                            <td><?php echo htmlspecialchars($produit['prix']); ?> Ar</td>
                                            <td><img src="<?php echo htmlspecialchars($produit['image']); ?>" alt="<?php echo htmlspecialchars($produit['nom']); ?>" width="50"></td>
                                            <td>
                                                <button class="btn btn-danger" onclick="confirmDeletion(<?php echo $produit['id']; ?>)">Supprimer</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; AFEBAS ADMIN By Impulse Digital Experience Agency</span>
                    </div>
                </div>
            </footer>
        </div>

        <script>
            // Fonction de confirmation avec SweetAlert
            function confirmDeletion(id) {
                Swal.fire({
                    title: 'Êtes-vous sûr de vouloir supprimer ce produit ?',
                    text: "Cette action est irréversible !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Oui, supprimer !',
                    cancelButtonText: 'Annuler'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Si l'utilisateur confirme, redirection vers le script de suppression
                        window.location.href = "./server/supprimer_produit.php?id=" + id;
                    }
                });
            }
        </script>
        <!-- Scripts -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/sb-admin-2.min.js"></script>

</body>

</html>