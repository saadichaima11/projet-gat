<?php 
 require_once 'dbConfig.php'; 
 $sql1 = "SELECT * FROM appli ORDER BY idapp DESC"; 
 $query = $conn->prepare($sql1); 
 $query->execute(); 
 $appli1 = $query->fetchAll(PDO::FETCH_ASSOC);

// Start session 
if(!session_id()){ 
    session_start(); 
} 
 
// Retrieve session data 
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:''; 
 
// Get status message from session 
if(!empty($sessData['status']['msg'])){ 
    $statusMsg = $sessData['status']['msg']; 
    $statusMsgType = $sessData['status']['type']; 
    unset($_SESSION['sessData']['status']); 
} 
 
// Include database configuration file 
require_once 'dbConfig.php'; 
 
// Fetch the data from SQL server 

$sql = "SELECT * FROM Members WHERE Appli= '$_POST[app]' "; 

$query = $conn->prepare($sql); 
$query->execute(); 
$members = $query->fetchAll(PDO::FETCH_ASSOC); 
 
?>


<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>chercher accés</title>

    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./assets/dist/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Chercher accés par utilisateurs</h1>



<form action="searchapp.php" method="POST">
<div class="form-group">
          <div class="form-group">
                <label>Application</label></br>
                <?php
        if(!empty($appli1)){ $count = 0; foreach($appli1 as $row){ $count++; ?> 
                <input type="radio" name="app"  value="<?php echo $row['nomapp']; ?>" /><?php echo $row['nomapp']; ?><br/>

          <?php }  ?>
          <?php }?>
            </div>
<input type="submit" value="Submit" name="submit">
</div>
</form>
  
    
    <!-- List the members -->
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>num demande</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Profil</th>
                <th>Departement</th>
                <th>Application</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php if(!empty($members)){ $count = 0; foreach($members as $row){ $count++; ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $row['ndemande']; ?></td>
                <td><?php echo $row['FirstName']; ?></td>
                <td><?php echo $row['LastName']; ?></td>
                <td><?php echo $row['Profil']; ?></td>
                <td><?php echo $row['Departement']; ?></td>
                <td><?php echo $row['Appli']; ?></td>
                <td>
                    <a href="addEdit.php?id=<?php echo $row['MemberID']; ?>" class="btn btn-warning">edit</a>

                    <a href="userAction.php?action_type=delete&id=<?php echo $row['MemberID']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?');">delete</a>
                </td>
            </tr>
            <?php } }else{ ?>
            <tr><td colspan="7">No member(s) found...</td></tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</html>