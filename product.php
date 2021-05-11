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
    <title>Product</title>
</head>

<body>
    <table style="max-width:700px" align="center">
        <h4 align=center><strong>Product</strong> </h4>
        <div class="row">
            <div class="column">
                <p align=center><strong></strong> </p>
                <table style="max-width:700px" align="center">
                    <tr>
                        <td>Number</td>
                        <td>Type Product</td>
                        <td>Name</td>
                        <td>Quantity</td>
                        <td>Price</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <?php
                    $sql = "SELECT * FROM product ";
                    $re = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($re)) : ?>
                        <tr>
                            <td><?php echo $row['product_id']; ?></td>
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><a href="editproduct.php?product_id=<?php echo $row['product_id']?> " class="w3-button w3-blue">edit</a></td>
                            <td><a href="delete.php?product_id=<?php echo $row['product_id']?> " class="w3-button w3-red" >delete</a></td>
                        </tr>
                    <?php endwhile ?>
                </table>
                <br>
            </div>
        </div>
    </table>
    <br>
    <div align=center>
        <a href="insertproduct.php" class="w3-button w3-green">INSERT</a>
        <a href="menu.php" class="w3-button w3-black">BACK</a>
    </div>
    <br>
</body>

</html>