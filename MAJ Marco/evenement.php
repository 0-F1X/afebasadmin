<?php
require_once '../server/trait-two-classement.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Evènements</title>

    <!-- Bootstrap core CSS -->
    <link rel="icon" type="image/png" href="assets/images/434984082_664231352458191_5826590618460124006_n - Copie.png">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
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
                      <li> <a href="informations.html">Informations</a></li>
                      <li><a href="evenement.php" class="exp">Evènements</a></li>
                      <li><a href="classement.php">Classement</a></li>
                     
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
            
            <h2>AFEBAS Madagascar <br> et La réunion  </h2>
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

 

 <div class="event">
   <div class="announcement-container">
    <h1>Annonces</h1>
  <select id="paysFiltre">
    <option value="madagascar">Madagascar</option>
    <option value="reunion">La Réunion</option>
  </select>

<div class="annonce madagascar">
    <div class="matches-container">
      <h3>Madagascar</h3>
      <h2 class="details-title" id="matches-title">Résultats des matchs <span class="arrow">&#9660;</span></h2>
      <div class="matches details" id="matches-details">
        <table>
          <thead>
            <tr>
              <th>Date</th>
              <th>Match</th>
              <th>Points</th>
              <th>Score</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Récupérer les résultats de la base de données
            $sql = "SELECT date_result, equipe, points, score, region FROM resultats WHERE region = 'madagascar'";
            $stmt = $pdo->query($sql);
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              echo "<tr>";
              echo "<td>" . htmlspecialchars($row['date_result']) . "</td>";
              echo "<td>" . htmlspecialchars($row['equipe']) . "</td>";
              echo "<td>" . htmlspecialchars($row['points']) . "</td>";
              echo "<td>" . htmlspecialchars($row['score']) . "</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="calendar-container">
      <h3>Madagascar</h3>
      <h2 class="details-title" id="calendar-title">Calendrier des matchs à venir <span class="arrow">&#9660;</span></h2>
      <div class="calendar details" id="calendar-details">
        <table>
        <thead>
              <tr>
                <th>Date</th>
                <th>Match</th>
                <th>Heure</th>
                <th>Lieu</th>
                <th>region</th>
              </tr>
            </thead>
            <tbody>
              <?php
              require '../server/db.php';

              // Requête pour récupérer uniquement les matchs de type 'réunion'
              $stmt = $pdo->query("SELECT * FROM matches WHERE region = 'madagascar'");
              $matches = $stmt->fetchAll(PDO::FETCH_ASSOC);
              ?>
              <?php foreach ($matches as $match): ?>
                <tr>
                  <td>
                    <?= htmlspecialchars($match['match_date']); ?>
                  </td>
                  <td>
                    <?= htmlspecialchars($match['match_name']); ?>
                  </td>
                  <td>
                    <?= htmlspecialchars($match['match_time']); ?>
                  </td>
                  <td>
                    <?= htmlspecialchars($match['match_location']); ?>
                  </td>
                  <td>
                    <?= htmlspecialchars($match['region']); ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
      </div>
    </div>
  </div>


<div class="annonce reunion">
    
    <div class="matches-container">
      <h3>La Reunion</h3>
      <h2 class="details-title" id="matches-title">Résultats des matchs <span class="arrow">&#9660;</span></h2>
      <div class="matches details" id="matches-details">
        <table>
        <thead>
              <tr>
                <th>Date</th>
                <th>Match</th>
                <th>Points</th>
                <th>Score</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // Récupérer les résultats de la base de données
              $sql = "SELECT date_result, equipe, points, score, region FROM resultats WHERE region = 'reunion'";
              $stmt = $pdo->query($sql);
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['date_result']) . "</td>";
                echo "<td>" . htmlspecialchars($row['equipe']) . "</td>";
                echo "<td>" . htmlspecialchars($row['points']) . "</td>";
                echo "<td>" . htmlspecialchars($row['score']) . "</td>";
                echo "</tr>";
              }
              ?>
            </tbody>
        </table>
      </div>
    </div>
    <div class="calendar-container">
      <h3>La Reunion</h3>
      <h2 class="details-title" id="calendar-title">Calendrier des matchs à venir <span class="arrow">&#9660;</span></h2>
      <div class="calendar details" id="calendar-details">
        <table>
        <thead>
              <tr>
                <th>Date</th>
                <th>Match</th>
                <th>Heure</th>
                <th>Lieu</th>
                <th>Region</th>
              </tr>
            </thead>
            <tbody>
              <?php
              require '../server/db.php';

              // Requête pour récupérer uniquement les matchs de type 'réunion'
              $stmt = $pdo->query("SELECT * FROM matches WHERE region = 'la-réunion'");
              $matches = $stmt->fetchAll(PDO::FETCH_ASSOC);
              ?>
              <?php foreach ($matches as $match): ?>
                <tr>
                  <td>
                    <?= htmlspecialchars($match['match_date']); ?>
                  </td>
                  <td>
                    <?= htmlspecialchars($match['match_name']); ?>
                  </td>
                  <td>
                    <?= htmlspecialchars($match['match_time']); ?>
                  </td>
                  <td>
                    <?= htmlspecialchars($match['match_location']); ?>
                  </td>
                  <td>
                    <?= htmlspecialchars($match['region']); ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
      </div>
    </div>
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
  <script src="assets/js/annonce.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/sponsor-banner.js"></script>
  <script src="assets/js/slider.js"></script>

  </body>
</html>