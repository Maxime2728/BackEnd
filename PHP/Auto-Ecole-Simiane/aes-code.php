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

              <!-- <li class="nav-item space">
          <a class="btn btn-outline-black text-black" href="prog-tarif.php" onclick="modifClassBtnProg()" id="prog">Programme et tarifs</a>
        </li> -->
              <li class="nav-item space">
                <a class="btn btn-outline-black text-black topbar-font" href="contact.php" onclick="modifClassBtnContact()" id="contact">Nous contacter</a>
              </li>
              <!-- <li class="nav-item space">
          <a class="btn btn-outline-dark" href="<?= RACINE_WEB ?>devis.php">Demande de devis</a>
        </li> -->
            </ul>
          </div>
    </div>
  </nav>
  <!-- Fin NavBar -->

  <div class="section-picture">
    <img src="images/pillon-du-roy-3.jpg" alt="Pilon du Roy" width="100%" style="height:594px !important;">
    <div class="container container-fixed">
      <div class="col col-md-3 pilon">
        <p class="pilon-text d-flex align-items-center">
          <img src="images/svg/camera.svg" alt="">
          Pilon du Roi
        </p>
      </div>
      <div class="col col-md-3 ident-page">
        <h3 class="text-pilon">Code de la route</h3>
      </div>
    </div>
  </div>

  <div class="row g-0 bg-light position-relative">
    <div class="col-md-6 mb-md-0 p-md-4">
      <img src="images/bannière-panneau-rout.png" class="w-100" alt="Devanture auto-ecole">
    </div>
    <div class="col-md-6 p-4 ps-md-0">
      <h5 class="mt-0 titre-bleu">Préparation au code</h5>
      <p>Chez Auto Ecole Simiane, notre priorité est l’obtention de votre permis. Nous comprenons bien que réussir son permis est un pas important dans la vie et nous voulons vous guider dans cette étape.<br><br>

        Découvrez notre méthode d’enseignement fondée sur des cours clairs, faciles à retenir et conçus pour que l’examen du code ne soit pour vous qu’une formalité ! Avec nous, vous avez la garantie de cours ludiques préparés par des enseignants expérimentés et compétents, le tout dans une ambiance agréable. N’hésitez plus, Auto Ecole Simiane est un gage de réussite !<br><br>

        Nos cours sont soigneusement préparés pour qu’ils soient faciles à comprendre et à étudier. Notre équipe de professionnels se tient à tous moments à votre disposition pour répondre à vos questions et vous faire progresser vite et bien.</p>
    </div>
  </div>

  <div class="card" style="width: 30%;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>

  </div>


  <?php require 'layout/bottom.php'; ?>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <script src="script/funtions.js"></script>
</body>
</body>

</html>