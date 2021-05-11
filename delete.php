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
    <title>Delete Product</title>
</head>

<body>
    <?php
        $productid = $_REQUEST['product_id'];
        $sql= " DELETE FROM `product` WHERE product_id = '$productid' ";
        mysqli_query($conn, $sql) or die ("Delete into the goods table an error occurred");
        mysqli_close($conn);
        header("location:product.php");
    ?>
</body>

</html>