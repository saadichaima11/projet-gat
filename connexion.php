<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=gat","root","");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
  
?>