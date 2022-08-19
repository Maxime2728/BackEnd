<?php require 'include/init.php'; ?>
<?php
session_start();

@$valid = $_POST["validate"];
$erreur = "";

if (isset($valid)) {
    if (empty($lastname)) $erreur = "Le champs Nom est obligatoire !";
    elseif (empty($firstname)) $erreur = "Le champs Prénom est obligatoire !";
    elseif (empty($email)) $erreur = "Le champs Email est obligatoire !";
    elseif (empty($send)) $erreur = "Le champs Message est obligatoire !";
}

if (isset($_POST['message'])) {
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: bizeaumaxime78@gmail.com' . "\r\n";
    $entete .= 'Reply-to: ' . $_POST['email'];

    $message = '<h1>Message envoyé depuis la page Contact de Auto-Ecole-Simiane.fr</h1>
    <hr>
    <p><b>Nom : </b>' . $_POST['nom'] . '<br>
    <b>Prénom : </b>' . $_POST['prenom'] . '<br>
    <b>Email : </b>' . $_POST['email'] . '<br>
    <b>Numéro de téléphone : </b>' . $_POST['tel'] . '<br>
    <hr>
    <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

    $retour = mail('bizeaumaxime78@gmail.com', 'Envoi depuis page Contact', $message, $entete);
    if ($retour)
        header("Location: mail.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous - Auto École Simiane</title>
    <link rel="stylesheet" href="style/all.css">
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

    <div class="section-picture mt-45">
        <img src="images/aes-contact.png" alt="Pilon du Roy" width="100%">
    </div>

    <div class="container d-flex center justify-content-center">
        <div class="card" style="width: 420px;">
            <div class="card-body">
                <h5 class="card-title">Coordonnées</h5>
                <hr class="mini-hr">
                <p class="text-bleu ms-1">Auto École Simiane</p>
                <p class="text-bleu ms-1">Agrément : <strong>E1501300230</strong></p>
                <p class="text-bleu ms-1">
                    <img src="images/svg/map-pin.svg" width="6%" />
                    27 rue Jacques Manera, 13109 Simiane-Collongue
                </p>
                <p class="text-bleu ms-1">
                    <img src="images/svg/phone.svg" width="6%" />
                    04 86 31 20 06
                </p>

                <p class="ms-1">
                    <img src="images/svg/mail.svg" width="6%" />
                    <a href="mailto:" class="lien">caranat@orange.fr</a>
                </p>


            </div>
        </div>
        <div class="card ms-5" style="width: 400px;">
            <div class="card-body">
                <h5 class="card-title">Formulaire de Contact</h5>
                <div class="mb-3">
                    <form method="post" class="inscrip_form">

                        <div class="form-group">
                            <label>Nom <em class="text-grey">*</em></label>
                            <input type="text" name="nom" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Prénom <em class="text-grey">*</em></label>
                            <input type="text" name="prenom" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email <em class="text-grey">*</em></label>
                            <input type="text" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="number" name="tel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Votre demande <em class="text-grey">*</em></label>
                            <input type="text" name="message" class="form-control" placeholder="Une question ? 
                            Besoin d'un renseignement ? 
                            Ce formulaire est fait pour ça." style="height: 50px;" required>
                        </div>
                        <p class="text-grey">* = Obligatoire </p>
                        <div class="form-btn-group me-2">
                            <button type="submit" class="btn btn-primary" name="send" id="send">Envoyer mon message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require "layout/bottom.php"; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="script/funtions.js"></script>
</body>

</html>