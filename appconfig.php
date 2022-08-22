<?php

if (isset($_POST['submitOrder'])) {
  // database connection
  include_once 'dbconfig.php';




  $sql1 = "INSERT INTO appli (nomapp, descri)  VALUES ($_POST[app], $_POST[descri])"; 
  $query = $conn->prepare($sql1); 
  $query->execute(); 
  $appli1 = $query->fetchAll(PDO::FETCH_ASSOC);



}
  ?>