<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
</head>
<body>
    <?php session_start();
    if ((!isset($_SESSION['login'])) || (empty($_SESSION['login']))) 
    {
    // la variable 'login' de session est non déclarée ou vide
    echo ' <p>Petit curieux... <a href="login.php" title"Connexion">Faut se connecter mon gars !</a></p>'."\n";
    exit();
    }
    
    else{
            
            echo '<p style="color:#FF0000; font-weight:bold;">Bienvenue '.$_SESSION['login'].'.</p>';
            echo '<a href="login.php" title="Déconnexion">Déconnexion </a>';
            };?>
    
</body>
</html>