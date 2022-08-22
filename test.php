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


<html>
<?php

 if(!empty($appli1)){ $count = 0; foreach($appli1 as $row){ $count++; ?>

<form method ="post" action="">
<input type="checkbox" name="apps[]"  value="<?php echo $row['nomapp']; ?>" /><?php echo $row['nomapp']; ?><br/>

<?php }  ?>
<input type="submit" id="submit" name="submit" value="submit">
</form>
<?php }

else{ ?>
            <tr><td colspan="7">No member(s) found...</td></tr>
            <?php } ?>


<?php
if(isset($_POST['submit']))
{if (!empty($_POST['apps'])){
foreach($_POST['apps'] as $valeur)
{
echo $valeur ."<br>";
}
}
}
?>
</html>

