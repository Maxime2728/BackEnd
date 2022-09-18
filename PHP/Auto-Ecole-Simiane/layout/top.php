<?php 
require_once 'include/fonctions.php';
// require 'Model/UserModel.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Accueil - Auto École Simiane</title> -->
    <link rel="stylesheet" href="style/layout.css">
    <link rel="stylesheet" href="style/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
                            <div class="nav-item dropdown">
                                <button type="button" class="btn btn-outline-black text-black dropdown-toggle topbar-font" data-bs-toggle="dropdown" aria-expanded="false">
                                    Mon Compte
                                </button>
                                <ul class="dropdown-menu">
                                    <?php if (!isUserConnected()) :
                                    ?>
                                        <li><a class="dropdown-item code topbar-font" href="mon-compte.php">Connexion / <br> Inscription</a></li>
                                    <?php endif; ?>
                                    <?php if (isUserConnected()) :
                                    ?>
                                        <!-- <li><p class="dropdown-item code topbar-font"><?php $prenom . ' ' . $nom; ?></p></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li> -->
                                        <li><a class="dropdown-item code topbar-font" href="mon-compte.php">Gérer mon Compte</a></li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item code topbar-font" href="deconnexion.php">Déconnexion</a></li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                    <?php endif; ?>
                                    <?php if (isUserAdmin() || isUserSuperAdmin() && isUserConnected() && panelAdminSecurity()) :
                                    ?>
                                        <li><a class="dropdown-item code topbar-font" href="admin/dashboard/pages/dashboard.php">Panel Administrateur</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <!-- <li class="nav-item space">
                                <a class="btn btn-outline-black text-black topbar-font" href="mon-compte.php" onclick="modifClassBtnContact()" id="contact">Mon Compte</a>
                            </li> -->
                        </ul>
                    </div>
        </div>
    </nav>
    <!-- Fin NavBar -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="script/funtions.js"></script>
</body>

</html>