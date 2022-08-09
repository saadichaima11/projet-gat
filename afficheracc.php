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

    <div class="jumbotron">
            <div class="container">
              <h1 class="display-4">Liste des applications par utilisateur</h1>
              <p>Cliquer sur le bouton afin d'actualiser la liste!</p> <br> <br>
            </div>
          </div>

<div class="container">
<div class="row">
<div class="table-responsive">
<label for="ndemande">Numero de demande</label> <br>
<input type="text" id="ndemande" name="num demande" placeholder="num demande..">
<h3>Liste des Application</h3> 
<p id="demo">Liste vide</p>
 
 <br>
 </div>

 <button  type="button"  onclick="refresh()" class="button">Actualiser</button>
</div>
</div>
   

    </div>
    <!--Container Main end-->
</body>
 
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

.button {
  width: 100%;
  background-color: #45a049;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=button]:hover {
  background-color: #45a049;
}


</style>
    <style>
     
    </style>
</html>
 