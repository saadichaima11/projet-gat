<?php
include("dbconfig.php");

 if(isset($_POST['submit'])){
  $descri= trim(strip_tags($_POST['descri']));
  $nomapp=trim(strip_tags($_POST['nomapp']));

  require_once 'dbConfig.php'; 
  $sql1 =" INSERT INTO appli (nomapp,descri) VALUES ('$nomapp' ,'$descri')";
  $query = $conn->prepare($sql1); 
  $query->execute(); 
  
 }


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ajouter application</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src ="js/main.js" ></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">

</head>
<?php include('navv.php'); ?> 
<body>
<div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
          <div class="form h-100">
          <div class="col-md-12">
        <h1 style="margin-left:-30px"> Ajouter application</h1>
        <br>
    </div>
<form action="addapp.php" method="post" class="mb-5" id="contactForm" name="contactForm">

    <div class="col-lg-3 col-mg-12 top-form">
      <div class="form-group">
        <input type="text" name="nomapp" class="form-control" placeholder="nom application">
      </div>
      <div class="form-group">
        <input type="text" name="descri" class="form-control" placeholder="Description">
      </div>
      
</br>
      
 
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {

      let i = 1;

      // add button
      $(document).on('click', '#add', function() {
        i++;
        console.log('add', i);
        let html = `</br>
        <div id="sec-div${i}" class="sec-pass mdt2">
        <button class="btn btn-danger mdb1 remove" type="button" name="remove" id="${i}">X</button>
      

        <div class="form-group">
          <input type="text" name="namemod[]" class="form-control" placeholder="Module">
        </div>
        

        
        
        
       
        
      </div>
        `;

        $('#main-div').append(html);

      });

      // remove button
      $(document).on('click', '.remove', function() {
        let removebtn = $(this).attr('id');
        $('#sec-div' + removebtn).remove();
        i--;
        console.log('remove', i);
      });
    });

   
  </script>

<div class="form-group">
<input type="submit" value="Submit"  class="btn btn-success" name="submit">
      </div>
      
   </form>
        

</body>

</html>