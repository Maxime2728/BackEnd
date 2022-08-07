<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Accueil - Auto École Simiane</title> -->
    <link rel="stylesheet" href="style/layout.css">
    <link rel="stylesheet" href="style/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-white fixed-top" id="navBar">
  <div class="container-fluid">
    <a class="navbar-brand position-relative top-50 start-0 ms-2 bg-white" href="index.php"><img src="images/logo-aes.png" alt="Logo"></a>
    <h1 class="position-absolute top-50 start-50 translate-middle text-black"><h1>
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
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item conduita topbar-font" href="aes-conduite-acc.php">Conduite Accompagnée</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item conduitt topbar-font" href="aes-conduite-tradi.php">Conduite Traditionnelle</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item conduits topbar-font" href="aes-conduite-sup.php">Conduite Supervisée</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item tarif topbar-font" href="aes-tarif.php">Tarifs</a></li>
            
            
          </ul>
        </li>
      
        <!-- <li class="nav-item space">
          <a class="btn btn-outline-black text-black" href="prog-tarif.php" onclick="modifClassBtnProg()" id="prog">Programme et tarifs</a>
        </li> -->
        <li class="nav-item space">
          <a class="btn btn-outline-black text-black topbar-font" href="contact.php" onclick="modifClassBtnContact()" id="contact">Contactez-nous</a>
        </li>
        <!-- <li class="nav-item space">
          <a class="btn btn-outline-dark" href="<?= RACINE_WEB ?>devis.php">Demande de devis</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

<!-- ---------- Side BAR ---------- -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="script/funtions.js"></script>
  </body>
</html>