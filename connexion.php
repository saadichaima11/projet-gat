<?php

$sql_server="DESKTOP-AT1H6S9";
$connectionInfo = array("Database"=>"ProfilAppli", "UID"=>"ProfilAppli", "PWD"=>"ProfilAppli");
$conn= sqlsrv_connect($sql_server, $connectionInfo);
if($conn){
   echo "connexion etablie";

}else {
   echo "erreur";
   die(print_r(sqlsrv_errors(),true));
}
?>


