<?php
session_start();

@$valid = $_POST["send"];
$erreur = "";

if (isset($valid)) {
    if (empty($lastname)) $erreur = "Le champs Nom est obligatoire !";
    elseif (empty($firstname)) $erreur = "Le champs Prénom est obligatoire !";
    elseif (empty($email)) $erreur = "Le champs Email est obligatoire !";
    elseif (empty($send)) $erreur = "Le champs Message est obligatoire !";

    if (isset($_POST['send'])) {
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
            header("Location: index.php");
        die();
    }
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

    <?php require 'layout/top.php'; ?>
    <br>

    <div class="container-fluid">
        <div class="mt-90">
            <img src="images/aes-contact.png" alt="Pilon du Roy" width="100%">
        </div>
    </div>
    <div class="container-fluid">

        <div class="container d-flex center justify-content-center">
            <div class="card" style="width: 420px;">
                <div class="card-body">
                    <h5 class="card-title">Coordonnées</h5>
                    <hr class="mini-hr">
                    <p class=" ms-1">Auto École Simiane</p>
                    <p class=" ms-1">Agrément : <strong>E1501300230</strong></p>
                    <p class=" ms-1">
                        <img src="images/svg/map-pin.svg" width="6%" />
                        27 rue Jacques Manera, 13109 Simiane-Collongue
                    </p>
                    <p class=" ms-1">
                        <img src="images/svg/phone.svg" width="6%" />
                        04 86 31 20 06
                    </p>

                    <p class="ms-1">
                        <img src="images/svg/mail.svg" width="6%" />
                        <a href="" class="lien">caranat@orange.fr</a>
                    </p>


                </div>
            </div>
            <div class="card ms-5" style="width: 400px;">
                <div class="card-body">
                    <h5 class="card-title">Formulaire de Contact</h5>
                    <div class="mb-3">
                        <form method="post" class="inscrip_form">

                            <div class="form-group">
                                <label>Nom <em class="text-red">*</em></label>
                                <input type="text" name="nom" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Prénom <em class="text-red">*</em></label>
                                <input type="text" name="prenom" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email <em class="text-red">*</em></label>
                                <input type="text" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="number" name="tel" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Votre demande <em class="text-red">*</em></label>
                                <input type="text" name="message" class="form-control" placeholder="Une question ? Besoin d'un renseignement ?" style="height: 50px;" required>
                            </div>
                            <p class="text-grey"><em class="text-red">*</em> = Obligatoire </p>
                            <div class="form-btn-group me-2 d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark" name="send" id="send">Envoyer mon message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php require "layout/bottom.php"; ?>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="script/funtions.js"></script>
</body>

</html>