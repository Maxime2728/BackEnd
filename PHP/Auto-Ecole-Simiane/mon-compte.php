<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte - Auto École Simiane</title>
    <link rel="stylesheet" href="style/all.css">

</head>

<body>
<?php require 'layout/top.php'; ?>
<br>
    <!-- Bandeau -->
    <div class="container-fluid">
        <div class="mt-60">
            <img src="images/aes-compte.png" alt="" width="100%">
        </div>
    </div>
    <br>
    <!-- Boutons -->

    <?php if (!isUserConnected()) : ?>
        <div class="container-fluid d-flex justify-content-center">

            <div class="text-center mt-2 mb-2 w-25">
                <h4> Vous n'êtes pas connecté, merci de vous identifier ou de créer un compte.</h4>
                <a type="button" class="btn btn-danger text-light mt-2 mb-2 w-50" href="connexion.php">Se connecter</a>
                <a type="button" class="btn btn-danger text-light mt-2 mb-2 w-50" href="inscription.php">S'inscrire</a>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="w-50 text-center">
                <img src="images/logo-aes-2.png" class="img-fluid" alt="logo aes">
            </div>
        </div>

    <?php endif; ?>

    <?php if (isUserConnected()) : ?>

        <div class="container-fluid d-flex justify-content-center">
            <div class="mt-2 w-50">
                <h4 class="text-center">Bonjour <em class="text-bleu"> <?= $_SESSION['utilisateur']['prenom']; ?></em>, vous pouvez gérer votre compte depuis cette page. <br> <em class="fs-5 fw-normal"> Pour toutes questions ou suggestions, merci de nous contacter.</em></h4>
            </div>
        </div>
        <br>

        <div class="container-fluid d-flex justify-content-center">
            <div class="mt-2 w-75 bg-light">
                <p class="fs-5 ms-4"> <strong class="fw-bold">Nom :</strong> <?= $_SESSION['utilisateur']['nom']; ?></p> 
                <button class="ms-4" onclick="">
                <p class="fs-5 ms-4"> <strong class="fw-bold">Prénom :</strong> <?= $_SESSION['utilisateur']['prenom']; ?></p>
            </div>
        </div>

    <?php endif; ?>

    <!-- Bottom -->
    <?php require_once "layout/bottom.php"; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="script/funtions.js"></script>
</body>

</html>