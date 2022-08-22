<?php 
// SQL server configuration 
$serverName = "DESKTOP-AT1H6S9"; 
$dbUsername = "Profilappli"; 
$dbPassword = "ProfilAppli"; 
$dbName     = "ProfilAppli"; 
 
// Create database connection 
try {   
   $conn = new PDO( "sqlsrv:Server=$serverName;Database=$dbName", $dbUsername, $dbPassword);    
   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );   
}   
   
catch( PDOException $e ) {   
   die( "Error connecting to SQL Server: ".$e->getMessage() );    
} 
?>