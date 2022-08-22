<?php


require_once 'dbConfig.php'; 
$sql1 = "SELECT * FROM appli ORDER BY idapp DESC"; 
$query = $conn->prepare($sql1); 
$query->execute(); 
$appli1 = $query->fetchAll(PDO::FETCH_ASSOC);


 if(isset($_POST['submit'])){
    $nomapp=$_POST['app'];
  $namemod=$_POST['namemod'];
 


  foreach ($namemod as $value) {
    echo "$value <br>";
  

  $sql2 =" INSERT INTO module (nommod,nomapp) VALUES ('$value' ,'$nomapp')";
  $query1 = $conn->prepare($sql2);
   
  $query1->execute(); 
}
  
 }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ajouter module</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<?php include('nav.html'); ?> 
<body>
  <div class="container">
<form action="addmod.php" method="post">
    <div class="col-lg-3 col-mg-12 top-form">
    <div class="form-group">
                <h1>Application</h1></br>
                <?php
        if(!empty($appli1)){ $count = 0; foreach($appli1 as $row){ $count++; ?> 
                <input type="radio" name="app"  value="<?php echo $row['nomapp']; ?>" /><?php echo $row['nomapp']; ?><br/>

          <?php }  ?>
          <?php }?>
            </div>
      <div id="main-div" class="mdt2">
        
        <div class="form-group">
          <input type="text" name="namemod[]" class="form-control" placeholder="MODULE">
        </div>
        <button class="btn btn-primary mdb1" type="button" name="add" id="add"><i class="fas fa-plus"></i>autre module</button>
</br>
<br>
      
 
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
<input type="submit" value="Submit" name="submit">
      </div>

   </form>
  </div>


</body>

</html>