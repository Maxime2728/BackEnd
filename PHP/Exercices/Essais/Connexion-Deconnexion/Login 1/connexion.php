<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=bdd-test","root","");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>