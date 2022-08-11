<?php 
// Start session 
if(!session_id()){ 
    session_start(); 
} 
 
// Include database configuration file 
require_once 'dbConfig.php'; 
 
// Set default redirect url 
$redirectURL = 'index.php'; 
 
if(isset($_POST['userSubmit'])){ 
    // Get form fields value 
    $MemberID = $_POST['MemberID']; 
    $ndemande = trim(strip_tags($_POST['ndemande'])); 
    $FirstName = trim(strip_tags($_POST['FirstName'])); 
    $LastName = trim(strip_tags($_POST['LastName'])); 
    $Profil = trim(strip_tags($_POST['Profil'])); 
    $Departement = trim(strip_tags($_POST['departement'])); 
    $Application = trim(strip_tags($_POST['Appli'])); 

     
    $id_str = ''; 
    if(!empty($id)){ 
        $id_str = '?id='.$MemberID; 
    } 
     
    // Fields validation 
    $errorMsg = ''; 
    if(empty($FirstName)){ 
        $errorMsg .= '<p>Please enter your first name.</p>'; 
    } 
    if(empty($LastName)){ 
        $errorMsg .= '<p>Please enter your last name.</p>'; 
    } 
    if(empty($Profil)) { 
        $errorMsg .= '<p>Please enter a profil.</p>'; 
    } 
    if(empty($Departement)){ 
        $errorMsg .= '<p>Please enter a departement.</p>'; 
    } 
    if(empty($Application)){ 
        $errorMsg .= '<p>Please enter an application.</p>'; 
    } 
     
    // Submitted form data 
    $userData = array( 
        'ndemande' => $ndemande, 
        'FirstName' => $FirstName, 
        'LastName' => $LastName, 
        'Profil' => $Profil, 
        'departement' => $Departement,
        'Appli' => $Application 
    ); 
     
    // Store the submitted field values in the session 
    $sessData['userData'] = $userData; 
     
    // Process the form data 
    if(empty($errorMsg)){ 
        if(!empty($MemberID)){ 
            // Update data in SQL server 
            $sql = "UPDATE Members SET ndemande= ?, FirstName = ?, LastName = ?, Profil = ?, departement = ?, Appli= ?  WHERE MemberID = ?";   
            $query = $conn->prepare($sql);   
            $update = $query->execute(array($ndemande,$FirstName, $LastName, $Profil, $Departement, $Application,$MemberID)); 
             
            if($update){ 
                $sessData['status']['type'] = 'success'; 
                $sessData['status']['msg'] = 'Member data has been updated successfully.'; 
                 
                // Remove submitted field values from session 
                unset($sessData['userData']); 
            }else{ 
                $sessData['status']['type'] = 'error'; 
                $sessData['status']['msg'] = 'Some problem occurred, please try again.'; 
                 
                // Set redirect url 
                $redirectURL = 'addEdit.php'.$id_str; 
            } 
        }else{ 
            // Insert data in SQL server 
            $sql = "INSERT INTO Members (ndemande,FirstName, LastName, Profil, departement,Appli ,  Created) VALUES (?,?,?,?,?,?,?)";   
            $params = array( 
                &$ndemande, 
                &$FirstName, 
                &$LastName, 
                &$Profil, 
                &$Departement,
                &$Application, 
                date("Y-m-d H:i:s") 
            );   
            $query = $conn->prepare($sql); 
            $insert = $query->execute($params);   
             
            if($insert){ 
                //$MemberID = $conn->lastInsertId(); 
                 
                $sessData['status']['type'] = 'success'; 
                $sessData['status']['msg'] = 'Member data has been added successfully.'; 
                 
                // Remove submitted field values from session 
                unset($sessData['userData']); 
            }else{ 
                $sessData['status']['type'] = 'error'; 
                $sessData['status']['msg'] = 'Some problem occurred, please try again.'; 
                 
                // Set redirect url 
                $redirectURL = 'addEdit.php'.$id_str; 
            } 
        } 
    }else{ 
        $sessData['status']['type'] = 'error'; 
        $sessData['status']['msg'] = '<p>Please fill all the mandatory fields.</p>'.$errorMsg; 
         
        // Set redirect url 
        $redirectURL = 'addEdit.php'.$id_str; 
    } 
     
    // Store status into the session 
    $_SESSION['sessData'] = $sessData; 
}elseif(($_REQUEST['action_type'] == 'delete') && !empty($_GET['id'])){ 
    $MemberID = $_GET['id']; 
     
    // Delete data from SQL server 
    $sql = "DELETE FROM Members WHERE MemberID= ?"; 
    $query = $conn->prepare($sql); 
    $delete = $query->execute(array($MemberID)); 
     
    if($delete){ 
        $sessData['status']['type'] = 'success'; 
        $sessData['status']['msg'] = 'Member data has been deleted successfully.'; 
    }else{ 
        $sessData['status']['type'] = 'error'; 
        $sessData['status']['msg'] = 'Some problem occurred, please try again.'; 
    } 
     
    // Store status into the session 
    $_SESSION['sessData'] = $sessData; 
} 
 
// Redirect to the respective page 
header("Location:".$redirectURL); 
exit(); 
?>