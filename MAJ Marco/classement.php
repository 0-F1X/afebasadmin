<?php
require_once '../server/trait-two-classement.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Classement</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/images/434984082_664231352458191_5826590618460124006_n - Copie.png">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <img src="assets/images/imgpsh_fullsize_anim.png" class="header_img">

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/434984082_664231352458191_5826590618460124006_n.jpg" alt="" style="width: 158px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" class="active"><i class="fas fa-home"></i></a></li>
                            <li><a href="informations.html">Informations</a></li>
                            <li><a href="evenement.php">Evènements</a></li>
                            <li><a href="classement.php" class="exp">Classement</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="caption header-text">
                        <h2>AFEBAS Madagascar <br> et La réunion</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to </p>
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

    <div class="tabs">
        <h1>Classement</h1>
        <button class="tablink" onclick="openTab('Madagascar')">Madagascar</button>
        <button class="tablink" onclick="openTab('reunion')">La Réunion</button>
    </div>

    <div id="Madagascar" class="tabcontent">
        <div class="calendar-container">
            <h2 class="details-title" id="calendar-title">Madagascar <span class="arrow">&#9660;</span></h2>
            <div class="calendar details" id="calendar-details">
                <table>
                    <thead>
                        <tr>
                            <th>Classement</th>
                            <th>Tournoi/Championnat</th>
                            <th>Nom et Prenom</th>
                            <th>Points</th>
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
        </div>
    </div>

    <div id="reunion" class="tabcontent">
        <div class="calendar-container">
            <h2 class="details-title" id="calendar-title">La Réunion <span class="arrow">&#9660;</span></h2>
            <div class="calendar details" id="calendar-details">
                <table>
                    <thead>
                        <tr>
                            <th>Classement</th>
                            <th>Tournoi/Championnat</th>
                            <th>Nom et Prenom</th>
                            <th>Points</th>
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

    <footer>
        <div class="container">
            <div class="col-lg-12">
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- Script pour gérer les onglets -->
    <script>
        function openTab(tabName) {
            // Cache tous les contenus des onglets
            var tabcontent = document.getElementsByClassName("tabcontent");
            for (var i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Affiche le contenu de l'onglet sélectionné
            document.getElementById(tabName).style.display = "block";
        }

        // Affiche l'onglet "Madagascar" par défaut
        document.getElementById("Madagascar").style.display = "block";
    </script>

</body>

</html>