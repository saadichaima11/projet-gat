<?php
   session_start();
   @$login=$_POST["login"];
   @$pass=md5($_POST["pass"]);
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      include ("ldap.php");
     }
      else{
        $erreur=" Mauvais login ou mot de passe!";
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
    <title>GAT Se Connecter</title>

    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./assets/dist/css/signin.css" rel="stylesheet">
      <meta charset="utf-8" />
     <style>
         *{
            font-family:arial;
         }
         body{
            margin:20px;
         }
         input{
            border:solid 1px #7A1D6C;
            margin-bottom:10px;
            padding:16px;
            outline:none;
            border-radius:6px;
         }
         .erreur{
            color:#CC0000;
            margin-bottom:10px;
         }
         a{
            font-size:12pt;
            color:#EE6600;
            text-decoration:none;
            font-weight:normal;
         }
         a:hover{
            text-decoration:underline;
            
         }
         .button{
                background-color: #FBBB0D;
                border: none;
                color: white;
                padding: 13px 90px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 4px;
            }
      </style> 
   </head>
   <body class="text-center" onLoad="document.fo.login.focus()">
  
   
     
      
      <form name="fo" method="post" id="myForm" class="form-signin" action="">
     
      <img class="mb-4" src="./assets/logogat.png" alt="" width="200" height="144">
        
      <h1 class="h3 mb-3 font-weight-normal">Veuillez vous connecter </h1>
      <label for="inputEmail" class="sr-only">Email </label>
      <input  type="text" id="inputEmail" name="login" class="form-control" placeholder="login" required autofocus>
      <label for="inputPassword" class="sr-only">Mot de Passe</label>
      <input type="password" name="pass"  class="form-control" placeholder="mot de Passe" required>

  <button name="valider"  class="button"   type="submit">Se Connecter  </button>
  <br> <a href="inscription.php">Créer un compte</a> <br>
  <div class="erreur"> <?php echo $erreur ?> </div>
  <p class="mt-5 mb-3 text-muted">&copy; Gestion des habilités applicatives</p>
      </form>
   </body>
</html>


