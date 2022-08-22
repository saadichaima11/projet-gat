<?php
require_once 'dbConfig.php'; 
if (isset($_GET['MemberID'])) {
    $MemberID = $_GET['MemberID'];
    $sql = "SELECT * FROM Members WHERE MemberID = $MemberID ";
    $result = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./assets/dist/css/style.css" rel="stylesheet">
    <title>Search</title>
</head>
<body>
    <header>
        
    </header>
    <main id="main">

    <h1> <?php echo $result["LastName"], $result['FirstName']; ?> </h1>
    <table style="wMemberIDth: 100% !important;">
        <thead>
            <tr>
                <th>LastName</th>
                <th>FirstName</th>
                <th>Profil</th>
                <th>Appli</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $result['LastName']; ?></td>
                <td><?php echo $result['FirstName']; ?></td>
                <td><?php echo $result['Profil']; ?></td>
                <td><?php echo $result['Appli']; ?></td>
            </tr>
        </tbody>
    </table>
    </main>
    </html>
<?php
} else if (isset($_GET['LastName'])) {
    $LastName = $_GET['LastName'];
    $sql = "SELECT * FROM Members WHERE LastName = '$LastName' ";
    $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

    <table>
        <thead>
            <tr>
                <th>LastName</th>
                <th>FirstName</th>
                <th>Profil</th>
                <th>Appli</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $result) {
            ?>
                <tr>
                    <td>
                        <h3><a class="search_name" href="index.php?MemberMemberID=<?php echo $result['MemberID']; ?>"><?php echo $result["LastName"], $result['FirstName']; ?></a></h3>
                    </td>
                    <td><?php echo $result['LastName']; ?></td>
                    <td><?php echo $result['FirstName']; ?></td>
                    <td><?php echo $result['Profil']; ?></td>
                    <td><?php echo $result['Appli']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<?php } else if (isset($_GET['FirstName'])) {
    $sql = "SELECT * FROM Members ";
    $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

    <table>
        <thead>
            <tr>
                <th>LastName</th>
                <th>FirstName</th>
                <th>Profil</th>
                <th>Appli</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $result) {
            ?>
                <tr>
                    <td>
                        <h3><a class="search_name" href="index.php?MemberID=<?php echo $result['MemberID']; ?>"><?php echo $result["LastName"], $result['FirstName']; ?></a></h3>
                    </td>
                    <td><?php echo $result['LastName']; ?></td>
                    <td><?php echo $result['FirstName']; ?></td>
                    <td><?php echo $result['Profil']; ?></td>
                    <td><?php echo $result['Appli']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    
<?php } ?>
