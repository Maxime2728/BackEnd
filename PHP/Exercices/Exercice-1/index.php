<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
<?php for($i = 3; $i < 7; $i++){
    echo '<font size="' .$i. '"> Hello World !</font><br>';
}
echo '<br>';
  for($i = 3; $i < 7; $i++){
    echo "<font size=\" $i \"> Hello World ! :)</font><br>";
}
echo '<br>';
for($i = 3; $i < 7; $i++){
    echo '<font size= $i >Hello World !</font><br>';
}




?>
    
</body>
</html>