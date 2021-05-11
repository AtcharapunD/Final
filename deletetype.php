<?php
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="index.css">
    <title>Delete Type Product</title>
</head>

<body>
    <?php
    $number = $_REQUEST['number'];
    $sql = " DELETE FROM `typeproduct` WHERE number = '$number' ";
    mysqli_query($conn, $sql) or die("Delete into the goods table an error occurred");
    mysqli_close($conn);
    header("location:typeproduct.php");
    ?>
</body>

</html>