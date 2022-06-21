<?php
 
@$lastname = $_POST["nom"];
@$firstname = $_POST["prenom"];
@$pseudo = $_POST["pseudo"];
@$password = $_POST["password"];
@$passwordConf = $_POST["passconf"];
@$pass_crypt = sha1($_POST["password"]);
@$email = $_POST["email"];
@$line1 = $_POST["line1"];
@$line2 = $_POST["line2"];
@$line3 = $_POST["line3"];
@$zipcode = $_POST["zipcode"];
@$city = $_POST["city"];
@$country = $_POST["country"];
@$email = $_POST["email"];
@$phone = $_POST["phone"];
?>