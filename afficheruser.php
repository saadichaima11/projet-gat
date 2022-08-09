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
              <h1 class="display-4">Afficher la liste des utilisateurs par application</h1>
              <p>Cliquer sur la liste afin de choisir l'application!</p>
            </div>
          </div>

<div class="container">
<form>
<div class="form-group">
<label for="classe">Choisir application:</label><br>

<input list="classe">
<datalist id="classe" name="classe">
    <option value="app1">App1</option>
    <option value="app2">App2</option>
    <option value="app3">App3</option>
    <option value="app4">App4</option>
    <option value="app5">App5</option>
</datalist>

<select id="classe" name="classe"  class="custom-select custom-select-sm custom-select-lg">
    <option value="app1">App1</option>
    <option value="app2">App2</option>
    <option value="app3">App3</option>
    <option value="app4">App4</option>
    <option value="app5">App5</option>
</select>
</div>
</form>
</div> 

   

    </div>
    <!--Container Main end-->
</body>
 
      
    <style>
     
    </style>
</html>
 