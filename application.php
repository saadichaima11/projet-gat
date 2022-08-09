<!DOCTYPE html>
<html>
   

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Chaima saadi">
    <meta name="generator" content="Hugo 0.88.1">
    <title> Application</title>
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


    <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Ajouter une application</h2>
        <div class="new_img_container">
          <img class="new_img" src="./assets/add-file-icon.png" alt="" width ="200px" height =" 140px">
        </div>
        <p> </p>
        <p><a class="btn btn-secondary" href="ajouterapp.php" role="button">Ajouter &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Afficher liste des users par application </h2>
        <div class="new_img_container">
          <img class="new_img" src="./assets/affiche.png" alt="" width ="200px" height =" 140px">
        </div>
        <p> </p>
        <p><a class="btn btn-secondary" href="afficheruser.php" role="button">Afficher &raquo;</a></p>
      </div>
      
    </div>

    <hr>

  </div>


    </div>
    <!--Container Main end-->
</body>
 
      
    <style>
      .new_img{width: 70px;
                height: 100px;
                display: flex;
                justify-content: center;
                
                overflow: hidden}
    </style>
</html>