<?php 
 
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
 
// Get member data 
$memberData = $userData = array(); 
if(!empty($_GET['id'])){ 
    // Include database configuration file 
    require_once 'dbConfig.php'; 
     
    // Fetch data from SQL server by row ID 
    $sql = "SELECT * FROM Members WHERE MemberID = ".$_GET['id']; 
    $query = $conn->prepare($sql); 
    $query->execute(); 
    $memberData = $query->fetch(PDO::FETCH_ASSOC); 
} 
$userData = !empty($sessData['userData'])?$sessData['userData']:$memberData; 
unset($_SESSION['sessData']['userData']); 
 
$actionLabel = !empty($_GET['id'])?'Edit':'Add'; 

 

 
?>
<?php 
 
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
 $sql1 = "SELECT * FROM appli ORDER BY idapp DESC"; 
 $query = $conn->prepare($sql1); 
 $query->execute(); 
 $appli1 = $query->fetchAll(PDO::FETCH_ASSOC);
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
<link href="./assets/dist/css/style.css" rel="stylesheet">
</head>
<?php include('nav.html'); ?> 
<body>
<div class="container">
       

<!-- Display status message -->
<?php if(!empty($statusMsg) && ($statusMsgType == 'success')){ ?>
<div class="col-xs-12">
    <div class="alert alert-success"><?php echo $statusMsg; ?></div>
</div>
<?php }elseif(!empty($statusMsg) && ($statusMsgType == 'error')){ ?>
<div class="col-xs-12">
    <div class="alert alert-danger"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>

<div class="row">
    <div class="col-md-12">
        <h2><?php echo $actionLabel; ?> Member</h2>
    </div>
    <div class="col-md-6">
   
   
   
         <form method="post" action="userAction.php">
         <div class="form-group">
                <label>Numero de demande</label>
                <input type="text" class="form-control" name="ndemande" placeholder="entrez votre num de demande " value="<?php echo !empty($userData['ndemande'])?$userData['ndemande']:''; ?>" required="">
            </div> 
         
         <div class="form-group">
                <label>Prénom</label>
                <input type="text" class="form-control" name="FirstName" placeholder="Enter your first name" value="<?php echo !empty($userData['FirstName'])?$userData['FirstName']:''; ?>" required="">
            </div>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" name="LastName" placeholder="Enter your last name" value="<?php echo !empty($userData['LastName'])?$userData['LastName']:''; ?>" required="">
            </div>
            <div class="form-group">
                <label>Profil</label>
                <input type="text" class="form-control" name="Profil" placeholder="entrez votre Profil" value="<?php echo !empty($userData['Profil'])?$userData['Profil']:''; ?>" required="">
            </div>
            <div class="form-group">
                <label>Departement</label>
                <input type="text" class="form-control" name="departement" placeholder="entrez votre departement" value="<?php echo !empty($userData['departement'])?$userData['departement']:''; ?>" required="">
            </div>
            

            <div class="form-group">
                <label>Application</label></br>
                <?php
        if(!empty($appli1)){ $count = 0; foreach($appli1 as $row){ $count++; ?> 
                <input type="checkbox" name="apps[]"  value="<?php echo $row['nomapp']; ?>" /><?php echo $row['nomapp']; ?><br/>

          <?php }  ?>
          <?php }?>
            </div>
            
            <a href="index.php" class="btn btn-secondary">Back</a>
            <input type="hidden" name="MemberID" value="<?php echo !empty($userData['MemberID'])?$userData['MemberID']:''; ?>">
            <input type="submit" name="userSubmit" class="btn btn-success" value="Submit">
        </form>
      




    </div>
</div>
<?php
if(isset($_POST['usersubmit']))
{if (!empty($_POST['apps'])){
foreach($_POST['apps'] as $valeur)
{
echo $valeur ."<br>";
}
}
}
?>