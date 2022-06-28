<?php
    if(!empty($_POST['numero'])){
         
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .recherche{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items:center;
        }

        .ligne{
            display:flex;
            justify-content: space-between;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php

require_once __DIR__ .'/Include/init.php';
require_once __DIR__ .'/layout/top.php';
require 'Model/ModelDossierSav.php';

?>


    <div class="recherche">
        <h1>Recherche</h1>
        <form action="post">
            <div class="ligne">    
                <label for="numero">Numéro de commande</label>
                <input type="text" name="numero">
            </div>
            <div class="ligne">
                <label for="numDossier">Numéro de dossier</label>
                <input type="text" name="numDossier">
            </div>
            <div class="ligne"> 
                <label for="logWeb">Login Web</label>
                <input type="text" name="logWeb">
            </div>
            <div class="ligne">  
            <label for="denClient">Dénomination Client</label>
            <input type="text" name="denClient">
        </div>
     
        
         
            <div class="button">
                <button class="btn" type="submit">Chercher</button>
                <button class="btn" type="reset">RAZ</button>
            </div>
        </form>
    </div>
    <div class="DossierFound">
        <?php
    echo $numDossie;
        ?>
    </div>
</body>
</html>
<?php

require_once __DIR__ .'/layout/bottom.php';
?>