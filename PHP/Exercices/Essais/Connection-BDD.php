<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

try{
$mysqlConnection = new PDO('mysql:host=localhost;dbname=menuiz-jo;charset=utf8','root','');
}

catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}
$sqlQuery = 'SELECT * from t_d_user_usr';
$nameUser =  $mysqlConnection->prepare($sqlQuery);
$nameUser->execute();
$names = $nameUser->fetchAll();

foreach($names as $name){
    ?>
   <p><?php echo 'Votre prénom est : '.$name['USR_FIRSTNAME']; ?> </p>
<?php
}
?>

</body>
</html>