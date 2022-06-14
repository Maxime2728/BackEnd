<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" description="menuiserie intranet">
        <!-- <link rel="stylesheet" href="CSS/style.css"> -->
        <title>Accueil </title>
</head>

<body>
    <?php
 session_start();
 $_SESSION['login'] = '';
 $_SESSION['password'] = '';
 if (isset($_POST['submit'])){
 // bouton submit pressé, je traite le formulaire
 $login = (isset($_POST['login'])) ? $_POST['login'] : '';
 $pass = (isset($_POST['pass'])) ? $_POST['pass'] : '';
 if (($login == "admin") && ($pass == "Admin")){
 $_SESSION['login'] = "admin";
 $_SESSION['password'] = "Admin";
 echo '<a href="../../index.php" title="Accueil de la section
membre">Accueil</a>';
 }
 else{
 // une erreur de saisie ...?
 echo '<p style="color:#FF0000; font-weight:bold;">Erreur de
connexion.</p>';
echo '<a href="login.php"> Rééssayez </a>';
 }
 }; // fin if (isset($_POST['submit']))
 if (!isset($_POST['submit']))
 {
 // Si bouton submit non pressé, alors j'affiche le
//formulaire
 echo '<form id="conn" method="post" action="">'."\n";
 echo ' <p><label for="login">Login :</label><input
type="text" id="login" name="login" /></p>'."\n";
 echo ' <p><label for="pass">Mot de Passe
:</label><input type="password" id="pass" name="pass"
/></p>'."\n";
 echo ' <p><input type="submit" id="submit"
name="submit" value="Connexion" /></p>'."\n";
 echo '</form>'."\n";
 }; // fin if (!isset($_POST['submit'])))


//  echo '<form id="deco" method="post" action="">';
//  echo '<input type="submit" id="deco" name="deco" value="Déconnexion"/>';
//  echo '</form>';

 if(isset($_POST['deco'])){
        session_destroy();
        echo '<p> Vous avez bien été déconnecté.</p>';
        if(session_destroy()){
                header("Location: login.php");
        }
 }
?>

</body>

<footer>
       
        <p class="mention">Mentions légales</p>
        <p class="copy">Copyright ©</p>
        <p class="mail">Mail : support@exemple.com</p>
</footer>

</html>