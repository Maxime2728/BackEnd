<?php session_start(); ?>
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
<?php require 'layout/top.php'; ?>
    <br>
  <!-- Bandeau -->
  <div class="section-picture mt-60">
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
      <div class="container-fluid">
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
      </div>
      <!-- ------------ Fin du Caroussel ------------ -->



    </div>
    <?php require 'layout/bottom.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="script/funtions.js"></script>
</body>
</body>

</html>