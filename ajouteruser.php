<?php
include("connexion.php");

 if(isset($_POST['submit'])){
  $ndemande=$_POST['ndemande'];
  $prenom= $_POST['prenom'];
  $nom= $_POST['nom'];
 

echo $ndemande ;
  
  $sql =" INSERT INTO utilisateur (ndemande,prenom,nom) VALUES ('$ndemande' ,'$prenom','$nom')";

  $result= sqlsrv_query($conn,$sql);
  if ($result)
  echo 'Data insertion success';
  else
  echo 'ERROR insertion';

}
?>

<!DOCTYPE html>
<html>
   

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title> Main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
  </head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="./assets/logo_gat.png" alt=""> </div>
    </header>


    <?php include('nav.php'); ?>


    <!--Container Main start-->
    <div class="height-100 bg-light">

    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


</style>
<body>

<h3>Ajouter un accés à un utilisateur </h3>

<div>
  <form action="ajouteruser.php" method="POST">
    <label for="prenom">Prénom</label>
    <input type="text" id="prenom" name="prenom" placeholder="prenom..">

    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom" placeholder="Nom..">

    <label for="ndemande">Numero de demande</label>
    <input type="text" id="ndemande" name="ndemande" placeholder="num demande..">

  
  
    <input type="submit"  value="submit" name="submit">
  </form>
</div>


   

    </div>
    <!--Container Main end-->
</body>
 
      
    <style>
     
    </style>
</html>
 