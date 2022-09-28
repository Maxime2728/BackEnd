<?php

// require_once __DIR__ .'/Include/init.php';

require 'Model/UserModel.php';
require_once 'include/fonctions.php';

session_start();

$userM = new ModeleUser();


$email = '';
$errors = [];
$mdp_val = '';

if (isset($_POST['validate'])) {
    sanitizePost();
    extract($_POST);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    sleep(1);

    if (empty($email)) {
        $errors[] = "L'email est obligatoire";
    }
    if (empty($mdp)) {
        $errors[] = 'Le mot de passe est obligatoire';
    }
    if (empty($errors)) {
        // $query = "SELECT USR_MAIL,USR_PASSWORD,USR_FIRSTNAME,USR_LASTNAME, UTY_TYPE as 'role' FROM t_d_user_usr usr
        // INNER JOIN t_d_usertype_uty uty on usr.uty_id=uty.uty_id
        // WHERE usr_mail= :email";
        // $stmt = $pdo->prepare($query);
        // $stmt->execute([':email' => $_POST['email']]);


        $utilisateur = $userM->RecupUserByMail($email)->fetchAll();

        // s'il ya un utilisateur en bdd avec l'email saisi
        if (!empty($utilisateur[0])) {
            $mdp_val = "mdp : " . sha1($mdp);

            if (sha1($mdp) == $utilisateur[0]['USR_PASSWORD']) {


                // connecte un utilisateur, c'est l'enregistrement en session

                $_SESSION['utilisateur']['id'] = $utilisateur[0]['USR_ID'];
                $_SESSION['utilisateur']['email'] = $utilisateur[0]['USR_MAIL'];
                $_SESSION['utilisateur']['mdp'] = $utilisateur[0]['USR_PASSWORD'];
                $_SESSION['utilisateur']['nom'] = $utilisateur[0]['USR_LASTNAME'];
                $_SESSION['utilisateur']['prenom'] = $utilisateur[0]['USR_FIRSTNAME'];
                $_SESSION['utilisateur']['role'] = $utilisateur[0]['role'];
                $_SESSION['utilisateur']['phone'] = $utilisateur[0]['USR_PHONE'];
                $_SESSION['utilisateur']['city'] = $utilisateur[0]['USR_CITY'];
                $_SESSION['utilisateur']['zip'] = $utilisateur[0]['USR_ZIPCODE'];
                $_SESSION['utilisateur']['adresse'] = $utilisateur[0]['USR_ADRESSE'];
                $_SESSION['utilisateur']['permis'] = $utilisateur[0]['permis'];

                setFlashMessage('Bonjour ' . $_SESSION['utilisateur']['prenom'] . ', nous sommes ravi de vous revoir !');
                header('Location: index.php');
                die;
            }
        }

        $errors[] = 'Identifiant ou mot de passe incorrect';
    }
}


if (!empty($errors)) :
?>
    <!-- <style>
form{
    width: 40% !important;
}
</style> -->
    <div class="alert alert-danger mt-90 text-center">
        <h5 class="alert-heading">Le formulaire contient des erreurs</h5>
        <?= implode('<br>', $errors);  ?>
        <p><?= $mdp_val; ?></p>
    </div>
<?php
endif;
?>
<?php require 'layout/top.php'; ?>
<br>

<div class="container-fluid w-25 mt-90 bg-light">
    <h1 class="text-center">Connexion</h1>
    <!-- <div class="offset-4"> -->
    <hr>
    <form method="post">
        <div class="mb-3 row">
            <label class="col-form-label ">Email</label>
            <div class="col-sm">
                <input type="email" name="email" class="form-control col-sm-3" value="<?= $email; ?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label class=" col-form-label">Mot de passe</label>
            <div class="col-sm">
                <input type="password" name="mdp" class="form-control col-sm-3">
            </div>
        </div>

        <div class="form-btn-group text-center">
            <button type="submit" class="btn btn-danger w-50" name="validate">Valider</button>
        </div>
    </form>
</div>
</div>
<div class="d-flex justify-content-center">
    <div class="w-50 text-center">
        <img src="images/logo-aes-2.png" class="img-fluid" alt="logo aes">
    </div>
</div>
<?php
require __DIR__ . '/layout/bottom.php';
?>