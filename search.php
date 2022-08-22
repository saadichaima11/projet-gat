<?php

    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }


    require_once 'dbConfig.php';
    $sql = "SELECT * FROM Members WHERE LastName LIKE '%$search%' OR FirstName LIKE '%$search%'";
  

    $result = $conn->prepare($sql); 
    $result->execute(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./assets/dist/css/style.css" rel="stylesheet">
    <title>Search</title>
</head>
<body>
    <header>
        
    </header>

    <main MemberID="main_search">
        <h1>Voici les résulat de votre recherche...</h1>
        <table class="table table-striped table-bordered">
        <thead class="thead-dark">
    
                    <tr>
                     
                        <th>num demande</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Application</th>
                        <th>Profil</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <?php
                foreach ($result as $data) {
                    echo '
               

                        <tr>
                        
                            <td> ' . $data['ndemande']. '   </td>
                            <td> ' . $data['LastName'] . ' </td>
                            <td>' . $data['FirstName']. '</td>
                            <td> ' . $data['Appli']. '   </td>
                           
                            <td> ' . $data['Profil']. '   </td>
                            
                            <td>
                            <a href="addEdit.php?id='.$data['MemberID'].'" class="btn btn-warning">edit</a>
        
                            <a href="userAction.php?action_type=delete&id='.$data['MemberID'].'" class="btn btn-danger" onclick="return confirm("Are you sure to delete?");">delete</a>
                        </td>

                           
                        
                        </tr>
                        ';
                }
            ?>



        </table>
     
             
       
    </main>

    <footer>
    </footer>
</body>
</html>



