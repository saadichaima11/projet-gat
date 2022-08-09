<?php
include("connexion.php");

 if(isset($_POST['submit'])){
  $descri= $_POST['descri'];
  $nomapp=$_POST['nomapp'];
  
  $insert =" INSERT INTO appli (nomapp,descri) VALUES ('$nomapp' ,'$descri')";

  $result= sqlsrv_query($conn,$insert);
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
    <title> ajouter appli</title>
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


    <!DOCTYPE html>
<html>
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

<h3>Ajouter une application à la base de données</h3>

<div>
  <form action="ajouterapp.php" method="POSt">
    <label for="nomapp">Nom de l'application</label>
    <input type="text" id="nomapp" name="nomapp" placeholder="Application..">

    <label for="descri">Description</label>
    <input type="text" id="descri" name="descri" placeholder="Description..">

   <!-- <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>-->
  
    <input type="submit" value="Submit" name="submit">
  </form>
</div>

</body>
</html>




    </div>
    <!--Container Main end-->
</body>
 
      
    <style>
     
    </style>
</html>