<?php
require 'include/fonctions.php';
session_start();
if (isUserAdmin() || isUserSuperAdmin() && isUserConnected()) :
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel Admin - Auto École Simiane</title>
        <link rel="stylesheet" href="style/all.css">
    </head>

    <body>
    <?php require 'layout/top.php'; ?>
    <br>

        




        <?php require_once 'layout/bottom.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
    </html>
<?php endif ?>