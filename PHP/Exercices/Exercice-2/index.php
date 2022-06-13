<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <table border = "1"></table>
    <?php
    echo "<h1>En ce " .date("d F Y"). ", sur le serveur Localhost, il est " .date("H")."h " .date("i")."min </h1>";
    echo "<h1> Variable HTTP serveur (getenv())</h1>";

    echo $_SERVER['SERVER_NAME'];
    echo '<br>';
    echo $_SERVER['SERVER_SOFTWARE'];
    echo '<br>';
    echo $_SERVER['SERVER_PROTOCOL'];
    echo '<br>';
    echo $_SERVER['REQUEST_METHOD'];
    ?>
    
</body>
</html>