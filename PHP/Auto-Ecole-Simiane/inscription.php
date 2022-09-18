<?php
// require_once __DIR__ .'/Include/init.php';
require_once 'include/fonctions.php';

require 'Model/UserModel.php';

session_start();


$errors = [];
$nom = $prenom = $email = '';
$userM = new ModeleUser();
if (isset($_POST['validate'])) {
    sanitizePost();
    extract($_POST);



    if (empty($_POST['nom'])) {
        $errors[] = 'Le nom est obligatoire';
    }

    if (empty($_POST['prenom'])) {
        $errors[] = 'Le prenom est obligatoire';
    }

    // test de la validité de l'adresse email
    if (empty($_POST['email'])) {
        $errors[] = "L'email est obligatoire";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email est pas valide";
    } else {



        // test de l'unicité de l'adresse en bdd
        // $query = 'SELECT count(*) FROM T_D_USER_USR WHERE USR_MAIL = :email';
        // $stmt = $pdo->prepare($query);

        // $stmt ->execute([':email' => $_POST['email']]);
        // $nb = $stmt->fetchColumn();

        $nb = $userM->RecupCountUsers($_POST['email']);

        if ($nb != 0) {
            $errors[] = "Cet email est deja utilisé";
        }
    }


    if (empty($_POST['mdp'])) {
        $errors[] = 'Le mot de passe est obligatoire';
    } else if (!preg_match('/^[a-zA-Z0-9_-]{6,20}$/', $_POST['mdp'])) {
        $errors[] = 'Le mot de passe doit faire entre 6 et 20 caractères '
            . 'et ne doit contenir que des chiffres, des lettres '
            . 'ou les caractères _ et -.';
    }

    if ($_POST['mdp'] != $_POST['mdp_confirm']) {
        $errors[] = 'Le mot de passe et sa confirmation ne sont pas identiques ';
    }

    if (empty($errors)) {
        // Faille XSS (Injection SQL)
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = htmlspecialchars($_POST['mdp']);
        $phone = htmlspecialchars($_POST['phone']);

        $userID = $userM->InsertUser($nom, $prenom, $email, $mdp, $phone);
        //   echo $userID;

        setFlashMessage('Votre compte est créé avec succès (ID: ' . $userID . ' ).');
        header('Location: index.php');
        die;
    }
}

if (!empty($errors)) :
?>
    <div class="alert alert-danger mt-90 text-center">
        <h5 class="alert-heading">Le formulaire contient des erreurs</h5>
        <?= implode('<br>', $errors);  ?>
    </div>
<?php
endif;
?>
 <?php require 'layout/top.php'; ?>
    <br>


<div class="container-fluid w-25 mt-90 bg-light">

    <h1 class="text-center">Inscription</h1>
    <hr>
    <form method="post" class="inscrip_form">

        <div class="form-group mb-2">
            <label>Nom <em class="text-red">*</em></label>
            <input type="text" name="nom" class="form-control" value="<?= $nom; ?>" placeholder="De France">
        </div>
        <div class="form-group mb-2">
            <label>Prenom <em class="text-red">*</em></label>
            <input type="text" name="prenom" class="form-control" value="<?= $prenom ?>" placeholder="François">
        </div>
        <div class="form-group mb-2">
            <label>Email <em class="text-red">*</em></label>
            <input type="text" name="email" class="form-control" value="<?= $email; ?>" placeholder="francois-defrance@gmail.com">
        </div>

        <div class="form-group mb-2">
            <label>Mot de passe <em class="text-red">*</em></label>
            <input type="password" name="mdp" class="form-control" placeholder="Votre mot de passe">
        </div>
        <div class="form-group mb-2">
            <label>Confirmation du mot de passe <em class="text-red">*</em></label>
            <input type="password" name="mdp_confirm" class="form-control">
        </div>
        <div class="form-group mb-2">
            <label>Numéro de téléphone</label>
            <input type="tel" name="phone" class="form-control">
        </div>
        <p class="text-grey"><em class="text-red">*</em> = Obligatoire </p>
        <div class="form-btn-group text-center">
            <button type="submit" class="btn btn-danger w-50 mb-2" name="validate">Valider</button>
        </div>
    </form>
</div>

<div class="d-flex justify-content-center">
    <div class="w-50 text-center">
        <img src="images/logo-aes-2.png" class="img-fluid" alt="logo aes">
    </div>
</div>
<?php
require 'layout/bottom.php';
?>