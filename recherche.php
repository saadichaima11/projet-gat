<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">    
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./assets/dist/css/style.css" rel="stylesheet">

    <title>Autocompletion</title>
</head>
<?php include('navv.php'); ?> 
<body>

    <header>
    </header>


    <main id="main">
<div class="container">
		<h1 id="titre">Recherche utilisateur</h1>

        <form action="recherche.php" id="recherche" method="get">

                <input class="" type="search" placeholder="Recherchez un utilisateur" aria-label="Search" name="search" id="search" autocomplete="off">

				<input id="research" type="submit" value="Search">     
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