<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=menuiz-jo","user","password");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>