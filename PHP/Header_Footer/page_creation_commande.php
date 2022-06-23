<?php
require 'ModelTypePaiement.php';

$typepaiement = new ModelePaiementType();
$payments = $typepaiement->RecupPaymentTypeAll()->fetchAll();




?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commander</title>
</head>
<body>
    
</body>
</html>