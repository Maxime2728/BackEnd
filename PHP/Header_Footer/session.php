<?php
 
 
    session_start();
 
if ($_SESSION["connecter"] != "yes") {
header("location:login.php");
exit();
}
if (date("H") < 18)
$bienvenue = "Bonjour et bienvenue <span class='bonjour'>"  .
$_SESSION["prenom_nom"]. "</span>";
else
$bienvenue = "Bonsoir et bienvenue "  .
$_SESSION["prenom_nom"];
?>
 
<!DOCTYPE  html>
<html>
<head>
<meta  charset="utf-8"  />
<title>Accueil</title>
<link rel="stylesheet" href="CSS/style.css">
<style>
* {
font-family: arial;
}
body {
margin: 20px;
}
h2 {
text-align: center;
color: pink;
}
a {
color: blue;
text-decoration: none;
float: right;
}
a:hover {
text-decoration: underline;
}
 
</style>
</head>
<body>
<?php include "header.php";?>

<div class="panier"><?php include"panier.php";?></div>
<h2 class="bienvenue">
    <?php  echo $bienvenue ?>
</h2>
<?php

 $mysqlConnection = new PDO('mysql:host=localhost;dbname=menuiz-jo;charset=utf8', 'root', '');
 $produitStatement = $mysqlConnection->prepare('SELECT * FROM T_D_PRODUCT_PRD');

 $produitStatement->execute();
 $produits = $produitStatement->fetchAll();

 include"produits.php";

    include"footer.php"?>
</body>
</html>