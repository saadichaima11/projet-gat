<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">    
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link href="./csss/bootstrap.min.css" rel="stylesheet">
    <link href="./Bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./assets/dist/css/style.css" rel="stylesheet">

<link href="./csss/style.css" rel="stylesheet">
<script src ="js/main.js" ></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">
    <title>recherche user</title>
</head>
<?php include('navv.php'); ?> 
<body>

    <header>
    </header>

<style>


@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #e74c3c;
  border-right: none;
  padding-left:200px;
  padding: 15px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #e74c3c;
}

.searchTerm:focus{
  color: #e74c3c;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #e74c3c;
  background: #e74c3c;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  padding :  50px 20px 700px 100px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

    <main id="main">



<div style="padding-top:200px;" class="container">

      
<form class="form-inline" action="recherche.php" id="recherche" method="get" class="mb-5" id="contactForm" name="contactForm">

<div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="Chercher un utilisateur" name="search" id="search">
      <button type="submit" class="searchButton" id="research" value="Search">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>

</form>

 
       
  

		<div id="data">
            <?php include_once('element.php'); ?>
        </div>
</div>
    </main>

    <footer class="">
        <script src="ressources/script.js"></script>
    </footer>

   
</body>
</html>