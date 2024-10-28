<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ecommerce.demo/afebas</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="shortcut icon" href="./assets/img/LOGO DEFINITIF.png" type="image/x-icon">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../MAJ Marco/assets/css/styles.css">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>



    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="caption header-text">

                        <h2>AFEBAS Madagascar <br> et La réunion </h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to </p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="right-image">
                        <img src="assets/images/1a472455-2db9-4dd7-9d61-f0ba1c802b1c" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="produits"> <!-- Section E-Commerce -->
        <div class="container" data-aos="fade-up" data-aos-duration="1500">
            <div class="section-title">
                <h2>Nos Produits
                </h2>
                <p>Nos équipements de billard sont conçus selon les normes les plus élevées de qualité et de fiabilité,
                    offrant une performance exceptionnelle pour répondre aux besoins des joueurs et des clubs
                    professionnels.</p>
            </div>
            <div class="header-search-container">
                <header class="section-header">
                    <h2>Parcourez les photos , passez vos commandes </h2>
                </header>

                <div class="search-bar-container">
                    <div class="search-bar-wrapper">
                        <input type="text" id="search-bar" class="search-bar" placeholder="Search..." />
                        <span class="search-icon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </div>
            </div>

            <?php
            // Inclure la connexion à la base de données
            require_once '../server/db.php'; // Vérifiez que le chemin est correct

            // Récupérer les produits de la base de données
            $sql = "SELECT * FROM produits";
            $stmt = $pdo->query($sql);
            $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <div class="swiper-slide swiper-slide-mobile">
                <div class="team-slider swiper">
                    <div class="swiper-wrapper align-items-stretch">
                        <?php foreach ($produits as $produit): ?>
                            <div class="swiper-slide">
                                <div class="member border p-3 shadow-sm rounded-top">
                                    <div class="member-img">
                                        <img src="../uploads/<?php echo htmlspecialchars($produit['image']); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($produit['nom']); ?>">
                                    </div>
                                    <div class="member-info">
                                        <br>
                                        <span><?php echo htmlspecialchars($produit['nom']); ?></span> <br>
                                        <span><?php echo htmlspecialchars($produit['description']); ?></span>
                                    </div>
                                </div>
                                <div class="member-price border p-3 shadow-sm rounded-bottom" style="background-color: rgba(128, 125, 122, 0.189);">
                                    <p style="font-weight: bolder;"><i class="fas fa-tag"></i> <?php echo htmlspecialchars($produit['prix']); ?> Ar</p>
                                    <p style="font-size: 12px;"><i class="fas fa-truck"></i> Livraison partout à Madagascar</p>
                                    <button class="btn btn-danger btn-sm sm mx-auto d-block commanderBtn"><i class="fas fa-shopping-cart"></i> Commander</button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div id="contactCard"
                style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);z-index: 9999;">
                <button
                    style="position: absolute; top: 10px; right: 10px; background-color: transparent; color: red; border: none; font-size: 20px; cursor: pointer;"
                    onclick="document.getElementById('contactCard').style.display = 'none'">&times;</button>
                <h3><i class="fas fa-shopping-cart" style="color: #007bff;"></i> Commandez sur :</h3> <br>
                <button
                    style="background-color: #25d366; color: white; border-radius: 5px; transition: background-color 0.3s; border: none;"
                    onclick="window.open('https://api.whatsapp.com/send?phone=NUMÉRO_DE_TÉLÉPHONE', '_blank')"><i
                        class="fab fa-whatsapp"></i> WhatsApp</button>
                <button
                    style="background-color: #007bff; color: white; border-radius: 5px; transition: background-color 0.3s; border: none;"
                    onclick="window.open('mailto:adresse@email.com')"><i class="fas fa-envelope"></i>
                    E-mail</button>
                <button
                    style="background-color: #3b5998; color: white; border-radius: 5px; transition: background-color 0.3s; border: none;"
                    onclick="window.open('https://www.facebook.com/VotrePageFacebook', '_blank')"><i
                        class="fab fa-facebook"></i> Facebook</button>
            </div>
    </section>

    <footer>
        <div class="container">
            <div class="col-lg-12">

            </div>
        </div>
    </footer>

    <style>
        .swiper-button-next,
        .swiper-button-prev {
            color: #000;
            /* Couleur des flèches */
            background: rgba(255, 255, 255, 0.5);
            /* Fond transparent */
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
    </style>


    <script>
        document.querySelectorAll('.commanderBtn').forEach(function(button) {
            button.addEventListener('click', function() {
                document.getElementById('contactCard').style.display = 'block';
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="./assets/js/particle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".team-slider", {
            slidesPerView: 4,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                400: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 4,
                },
            },
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>