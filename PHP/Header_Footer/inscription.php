<?php
session_start();
include("infos.php");
include("Model/ModelAdresse.php");
@$valider = $_POST["inscrire"];
$erreur = "";
if (isset($valider)) {
if (empty($lastname)) $erreur = "Le champs Nom est obligatoire !";
elseif (empty($firstname)) $erreur = "Le champs Prénom est obligatoire !";
elseif (empty($pseudo)) $erreur = "Le champs Pseudo est obligatoire !";
elseif(empty($email)) $erreur = "Le champs Email est obligatoire !";
elseif (empty($password)) $erreur = "Le champs Mot De Passe est obligatoire !";
elseif (empty($line1)) $erreur = "Le champs Adresse est obligatoire !";
elseif (empty($zipcode)) $erreur = "Le champs Code Postal est obligatoire !";
elseif (empty($city)) $erreur = "Le champs Ville est obligatoire !";
elseif (empty($country)) $erreur = "Le champs Pays est obligatoire !";
elseif ($password != $passwordConf) $erreur = "Mots de passe differents !";
else {
include("connexion.php");
$verify_pseudo = $pdo->prepare("select USR_ID from t_d_user_usr where username=? limit 1");
$verify_pseudo->execute(array($pseudo));
$user_pseudo = $verify_pseudo->fetchAll();
if (count($user_pseudo) > 0)
$erreur = "Ce Pseudo existe déjà!";


/* Vérifier si l'e-mail est déjà dans la base de données. */
$verify_email = $pdo->prepare("select USR_ID from t_d_user_usr where USR_MAIL=? limit 1");
$verify_email->execute(array($email));
$user_email = $verify_email->fetchAll();
if (count($user_email) > 0)
$erreur = "Email déjà existante !";

else {
  $insertAdd = new ModeleAddress(0);
$ins = $pdo->prepare("insert into t_d_user_usr(USR_LASTNAME,USR_FIRSTNAME,username,USR_PASSWORD, USR_MAIL) values(?,?,?,?,?)");
if ($ins->execute(array($lastname, $firstname, $pseudo, sha1($password), $email)))
$insertAdr = $insertAdd->InsertAddress($firstname,$lastname,$line1,$line2,$line3,$zipcode,$city,$country,$email,$phone);
header("location:login.php");
     }
   }
}
?>
<!DOCTYPE  html>
 
<html>
<head>
<meta  charset="utf-8"  />
<link rel="stylesheet" href="CSS/style.css">
<style>
* {
font-family: arial;
}
body {
margin: 20px;
}
form {
position: absolute;
top: 40%;
left: 50%;
margin-left: -150px;
margin-top: -100px;
}
h1 {
text-align: center;
color: #FFFAFA;
background: blue;
}
input[type=submit] {
border: solid  1px  blue;
margin-bottom: 10px;
float: right;
padding: 15px;
outline: none;
border-radius: 7px;
width: 120px;
}
input[type=text],
[type=password],[type=email],
[type=number],[type=tel] {
border: solid  1px  blue;
margin-bottom: 10px;
padding: 16px;
outline: none;
border-radius: 7px;
width: 300px;
}
.div-erreur{
  display: flex;
  justify-content: center;
}
.erreur {
text-align: center;
color: red;
margin-top: 5%;
/* background-color: red; */
width: 50%;
height: 30px;
font-size: 25px;
border-radius: 10px;
}
a {
font-size: 14pt;
color: blue;
text-decoration: none;
font-weight: normal;
}
a:hover {
text-decoration: underline;
}
</style>
</head>
<body>
<h1>Inscription</h1>
<div class="div-erreur">
<div  class="erreur"><?php  echo  $erreur  ?></div>
</div>
<div class="centrer-form">
<form  name="fo"  method="post"  action="">
  <div class="grid-signin-1">
<input  type="text"  name="nom"  placeholder="Nom"  value="<?=  $lastname  ?>"  /><br  />
<input  type="text"  name="prenom"  placeholder="Prénom"  value="<?=  $firstname  ?>"  /><br  />
</div>
<input  type="text"  name="pseudo"  placeholder="Votre Pseudo"  value="<?=  $pseudo  ?>"  /><br  />
<input  type="email" name="email" placeholder="Votre adresse mail" value="<?= $email ?>"/> <br>
<input  type="password"  name="password"  placeholder="Mot de passe"  /><br  />
<input  type="password"  name="passconf"  placeholder="Confirmer votre Mot de passe"  /><br  />
<input  type="text" name="line1" placeholder="Votre adresse 1ere Ligne" value="<?=  $line1  ?>"/><br/>
<input  type="text" name="line2" placeholder="Votre adresse 2eme Ligne" value="<?=  $line2  ?>"/><br/>
<input  type="text" name="line3" placeholder="Votre adresse 3eme Ligne" value="<?=  $line3  ?>"/><br/>
<input type="number" name="zipcode" placeholder="Votre Code Postale" value="<?=  $zipcode  ?>"/><br/>
<input type="text" name="city" placeholder="Votre Ville" value="<?=  $city  ?>"/><br/>
<input type="text" name="country" placeholder="Votre Pays" value="<?=  $country  ?>"/><br/>
<input type="tel" name="phone" placeholder="Votre numéro de téléphone" value="<?=  $phone  ?>"/><br/>


<input  type="submit"  name="inscrire"  value="S'inscrire"  />
<a  href="login.php">Déjà un compte ?</a>
</form>
</div>
</body>
</html>