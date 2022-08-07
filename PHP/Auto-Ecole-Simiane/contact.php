<?php require 'include/init.php'; ?>
<?php
session_start();
@$valid = $_POST["validate"];
$erreur = "";
if (isset($valid)) {
    if (empty($lastname)) $erreur = "Le champs Nom est obligatoire !";
    elseif (empty($firstname)) $erreur = "Le champs Prénom est obligatoire !";
    // elseif (empty($phone)) $erreur = "Le champs Numéro de téléphone est obligatoire !";
    elseif (empty($email)) $erreur = "Le champs Email est obligatoire !";
    elseif (empty($send)) $erreur = "Le champs Message est obligatoire !";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous - Auto École Simiane</title>
    <link rel="shortcut icon" href="images/icone-auto-ecole-simiane-blanc.jpg">
</head>

<body>

    <?php require 'layout/top.php'; ?>

    <div class="section-picture">
        <img src="images/aes-contact.png" alt="Pilon du Roy" width="100%">
        <div class="container container-fixed">
            <div class="col col-md-3 pilon">
                <!-- <p class="pilon-text d-flex align-items-center">
                    <img src="images/svg/camera.svg" alt="">
                    Pilon du Roi
                </p> -->
            </div>
            <div class="col col-md-3 ident-page">
                <!-- <h3 class="text-pilon">Contact</h3> -->
            </div>
        </div>
    </div>

    <div class="container d-flex center justify-content-center">
        <div class="card" style="width: 400px;">
            <div class="card-body">
                <h5 class="card-title">Coordonnées</h5>
                <hr class="mini-hr">
                <p>Auto École Simiane</p>
                <p>Agrément : E1501300230</p>
                
            </div>
        </div>
    <div class="card ms-5" style="width: 400px;">
        <div class="card-body">
            <h5 class="card-title">Formulaire de Contact</h5>
            <div class="mb-3">
                <form method="post" class="inscrip_form">

                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" name="prenom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="number" name="tel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Votre demande</label>
                        <input type="text" name="message" class="form-control" placeholder="Une question ? Besoin d'un renseignement ? Ce formulaire est fait pour ça." style="height: 50px;">
                    </div>
                    <div class="form-btn-group text-right">
                        <button type="submit" class="btn btn-primary" name="send">Envoyer</button>
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