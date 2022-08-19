<?php require 'include/init.php'; ?>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/all.css">
  <title>Code de la route - Auto École Simiane</title>
  <link rel="shortcut icon" href="images/icone-auto-ecole-simiane-blanc.jpg">
</head>

<body>
  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg bg-light fixed-top" id="navBar">
    <div class="container-fluid">
      <a class="navbar-brand position-relative top-50 start-0 ms-2 bg-white" href="index.php"><img src="images/logo-aes.png" alt="Logo"></a>
      <h1 class="position-absolute top-50 start-50 translate-middle text-black">
        <h1>
          <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
          <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav me-5">
              <li class="nav-item space">
                <a class="btn btn-outline-black text-black topbar-font" aria-current="page" href="index.php" onclick="modifClassBtnHome()" id="home">Accueil</a>
              </li>
              <li class="nav-item dropdown">
                <a class=" btn btn-outline-black text-black dropdown-toggle topbar-font" href="" id="navbarDropdown" role="" data-bs-toggle="dropdown" aria-expanded="true">

                  Formations
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <li><a class="dropdown-item code topbar-font" href="aes-code.php">Code de la route</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item conduita topbar-font" href="aes-conduite-acc.php">Conduite Accompagnée</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item conduitt topbar-font" href="aes-conduite-tradi.php">Conduite Traditionnelle</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item conduits topbar-font" href="aes-conduite-sup.php">Conduite Supervisée</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item tarif topbar-font" href="aes-tarif.php">Tarifs</a></li>


                </ul>
              </li>
              <li class="nav-item space">
                <a class="btn btn-outline-black text-black topbar-font" href="contact.php" onclick="modifClassBtnContact()" id="contact">Nous contacter</a>
              </li>
            </ul>
          </div>
    </div>
  </nav>
  <!-- Fin NavBar -->
  <!-- Bandeau -->
  <div class="section-picture mt-90">
    <img src="images/aes-code-de-la-route-bande.png" alt="Pilon du Roy" width="100%">
    <div class="container container-fixed">
      <div class="col col-md-3 pilon">
        <!-- <p class="pilon-text d-flex align-items-center">
          <img src="images/svg/camera.svg" alt="">
          Pilon du Roi
        </p> -->
      </div>
      <div class="col col-md-3 ident-page">
        <!-- <h3 class="text-pilon">Code de la route</h3> -->
      </div>
    </div>
  </div>
  <!-- Fin Bandeau -->

  <br>
  <div class="page">
    <div class="center">
      <!-- ------------ Caroussel ------------ -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" style="height:594px !important;" data-bs-interval="7000">
            <img src="images/conduite-tradi.jpg" class="d-block w-100" alt="Passez votre permis !" style="height:594px !important;">
            <div class="carousel-caption d-none d-md-block text-bg-black">
              <h5 class="titre-bleu">ACCES WEB (INTERNET)</h5>
              <p>
                L'accès web (internet) permet de compléter votre formation au code de la route avec 54 séries type examen, soit 2160 questions. Cet accès est utilisable 12 mois (compris dans le forfait) et peut être renouvelé à la demande. </p>
            </div>
          </div>
          <div class="carousel-item" style="height:594px !important;" data-bs-interval="7000">
            <img src="images/peugeot-208-bleu-2.jpg" class="d-block w-100" alt="Des véhicules modernes" style="height:594px !important;">
            <div class="carousel-caption d-none d-md-block text-bg-black">
              <h5 class="titre-red">ENTRAINES TOI EN LIGNE</h5>
              <!-- Revoir la fin de la phrase !  -->
              <p>
                Des tests sur 20 questions sont également proposés sur les différents thèmes du code de la route.
                La connexion code est au tarif de 30€ TTC pour 12 mois et est comprise dans le forfait.
              </p>
            </div>
          </div>
          <div class="carousel-item" style="height:594px !important;" data-bs-interval="9000">
            <img src="images/heure-conduite.png" class="d-block w-100" alt="Auto Ecole Simiane" style="height:594px !important;">
            <div class="carousel-caption d-none d-md-block text-bg-black">
              <h5 class="titre-bleu">AUJOURD’HUI, LE PERMIS DE CONDUIRE EST LA CLÉ DE LA LIBÉRTÉ, INDISPENSABLE À L’INTÉGRATION SOCIALE ET PROFESSIONNELLE.</h5>
              <p>Obtenir son permis signifie avant tout d’avoir une bonne formation initiale. Cette formation est primordiale pour appréhender sereinement sa future vie d’automobiliste.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon text-bg-black" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon text-bg-black" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- ------------ Fin du Caroussel ------------ -->



    </div>
    <?php require 'layout/bottom.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="script/funtions.js"></script>
</body>
</body>

</html>