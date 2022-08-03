<?php
   session_start();
   @$nom=$_POST["nom"];
   @$prenom=$_POST["prenom"];
   @$login=$_POST["login"];
   @$pass=$_POST["pass"];
   @$repass=$_POST["repass"];
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      if(empty($nom)) $erreur="Nom laissé vide!";
      elseif(empty($prenom)) $erreur="Prénom laissé vide!";
      elseif(empty($prenom)) $erreur="Prénom laissé vide!";
      elseif(empty($login)) $erreur="Login laissé vide!";
      elseif(empty($pass)) $erreur="Mot de passe laissé vide!";
      elseif($pass!=$repass) $erreur="Mots de passe non identiques!";
      else{
         include("connexion.php");
         $sel=$pdo->prepare("select id from administrateur where login=? limit 1");
         $sel->execute(array($login));
         $tab=$sel->fetchAll();
         if(count($tab)>0)
            $erreur="Login existe déjà!";
         else{
            $ins=$pdo->prepare("insert into administrateur(nom,prenom,login,pass) values(?,?,?,?)");
            if($ins->execute(array($nom,$prenom,$login,md5($pass))))
               header("location:login.php");
         }   
      }
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
    <title> Inscription Admin</title>

    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./assets/dist/css/signin.css" rel="stylesheet">
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
                padding: 13px 110px;
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
  <body class="text-center">
  <div class="erreur"><?php echo $erreur ?> </div>  
<form name="fo" method="post" class="form-signin" action="">
 
  <img class="mb-4" src="./assets/logogat.png" alt="" width="200" height="144">
  <h1 class="h3 mb-3 font-weight-normal">Veuillez créer votre compte</h1>

  <input type="text" class="form-control" name="nom" placeholder="Nom" required autofocus value="<?php echo $nom?>" /><br /><br />
  <input type="text" class="form-control" name="prenom" placeholder="Prénom" required value="<?php echo $prenom?>"  /><br />
  <input type="text" class="form-control" name="login" placeholder="Login" value="<?php echo $login?>" required /><br />
  <input type="password" class="form-control" name="pass" value="<?php echo $pass?>" placeholder="Mot de passe" required /><br />
  <input type="password" class="form-control" name="repass" value="<?php echo $repass?>" placeholder="Confirmer Mot de passe" required /><br />
  <button name="valider" class="button" type="submit">S'inscrire</button>

  <p class="mt-5 mb-3 text-muted">&copy; Gastion des habilités applicatives</p>
</form>


    
  </body>
</html>