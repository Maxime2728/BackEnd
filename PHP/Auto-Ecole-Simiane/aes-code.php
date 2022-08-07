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
  <!-- Bandeau -->
  <div class="section-picture">
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

  <!-- Tarifs -->
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h1 class="card-title text-center">30€</h1>
    <h5 class="card-subtitle mb-2 text-center">Code de la route</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<!-- Fin Tarifs -->

  


  <?php require 'layout/bottom.php'; ?>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <script src="script/funtions.js"></script>
</body>
</body>

</html>