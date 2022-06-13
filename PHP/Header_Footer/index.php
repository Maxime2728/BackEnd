<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Accueil </title>
</head>
<body>   
 <?php
 // HEADER
 include "header.php";
    echo "<main>";

            echo '<div id="product-box" class="box-container">';
            echo '<h1 class="title"> Nos produits : </h1><br>';
            echo '<div class="container-card">';
            echo '<div id="card-1" class="card-produit card-1 margin-right">';
            echo '<img src="img/portail1-rogne.PNG" alt="portail coulissant 1">';
            echo '<div id="product-1" class="container-product">';
            echo '<h3 class="card-title"> Portail coulissant alu plein droit ORLEANS</h3>';
            echo '<p class="prix">1763,69€</p>';
            echo '</div>';
            echo '</div>';

            echo '<div id="card-2" class="card-produit card-2 margin-left">';
            echo '<img src="img/portail2-rogne.PNG" alt="Portail 2">';
            echo '<div id="product-2" class="container-product">';
            echo '<h3 class="card-title"> Portail coulissant alu plein droit MELVILLE </h3>';
            echo '<p class="prix"> 1689,58€</p>';
            echo '</div>';
            echo '</div>';

            echo '<div id="card-3" class="card-produit card-3 margin-right">';
            echo '<img src="img/portail3-rogne.PNG" alt="Portail 3">';
            echo '<div id="product-3" class="container-product">';
            echo '<h3 class="card-title"> Portail coulissant alu droit persienné BRISAL</h3>';
            echo '<p class="prix"> 1977,60€</p>';
            echo '</div>';
            echo '</div>';

            echo '<div id="card-4" class="card-produit card-4 margin-left">';
            echo '<img src="img/porte1-rogne.png" alt="Porte 1">';
            echo '<div id="product-4" class="container-product">';
            echo '<h3 class="card-title"> Porte d\'entrée aluminium HUDSON </h3>';
            echo '<p class="prix"> 2194,72€</p>';
            echo '</div>';
            echo '</div>';

            echo '<div id="card-5" class="card-produit card-5 margin-right">';
            echo '<img src="img/porte2-rogne.png" alt="Porte 2">';
            echo '<div id="product-5" class="container-product">';
            echo '<h3 class="card-title"> Porte d\'entrée aluminium FACTORY </h3>';
            echo '<p class="prix"> 1459,72€</p>';
            echo '</div>';
            echo '</div>';

            echo '<div id="card-6" class="card-produit card-6 margin-left">';
            echo '<img src="img/porte3-rogne.png" alt="Porte 3">';
            echo '<div id="product-6" class="container-product">';
            echo '<h3 class="card-title"> Porte d\'entrée aluminium LISBONNE </h3>';
            echo '<p class="prix"> 1459,72€</p>';
            echo '</div>';
            echo '</div>';

            echo '</div>';
            echo '</div>';
       

   
   

    echo "</main>";
    // FOOTER
     include "footer.php";
?>

</body>
</html>