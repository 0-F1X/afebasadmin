<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afebas/admin</title>
    <link rel="shortcut icon" href="./asset/images/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link rel="stylesheet" href="./asset/css/style.css">
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="./asset/images/Logo.png" style="width: 100px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1" style="font-weight: bold; font-size: 20px;">Accès
                                            réservé aux administrateurs</h4>
                                    </div>

                                    <form method="POST" action="./server/trait-login.php"> <!-- Spécifie le fichier de traitement -->
                                        <p style="color: gray">Veuillez vous connecter à votre compte.</p>
                                
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11" style="font-weight: bold;">
                                                <i class="fas fa-user"></i> Nom d'Utilisateur</label>
                                            <input type="email" id="form2Example11" name="email" class="form-control" required />
                                        </div>
                                
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22" style="font-weight: bold;">
                                                <i class="fas fa-lock"></i> Mot de passe</label>
                                            <input type="password" id="form2Example22" name="password" class="form-control" required />
                                        </div>
                                
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button type="submit" class="btn-gradient">
                                                <i class="fas fa-sign-in-alt"></i> Connexion
                                            </button>
                                        </div>
                                
                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Vous n'avez pas encore de compte?</p>
                                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">
                                                <a href="./register.php">Creer</a>
                                            </button>
                                        </div>
                                
                                        <?php if (isset($error)): ?>
                                            <p style="color: red;"><?php echo $error; ?></p>
                                        <?php endif; ?>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4" style="font-weight: bold; font-size: 21px;">AFEBAS MADAGASCAR - LA
                                        REUNION</h4>
                                    <p class="small mb-0">L'espace Admin de l'AFEBAS Madagascar et la Réunion est une
                                        plateforme
                                        dédiée aux administrateurs de l'association, leur offrant un accès exclusif à
                                        des outils et des ressources essentielles pour la gestion et la coordination des
                                        activités.</p> <br>
                                    <button type="button"> <a href="./resulandmatch.php">
                                            <i class="fas fa-sign-in-alt"></i> Visiter le Dashboard Brouillon
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./vendor/jquery/jquery.min.js"></script>
</body>

</html>