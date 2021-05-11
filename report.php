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
    <title>Report</title>
</head>

<body>

    <br>
    <table style="max-width:700px" align="center">
        <br>
        <h4 align=center><strong> Report Of Product </strong> </h4>
        <div class="row">
            <div class="column">
                <p align=center><strong></strong> </p>
                <table style="max-width:700px" align="center">
                    <tr>
                        <td>Number</td>
                        <td>Type Name</td>
                        <td>Quantity</td>
                    </tr>
                    <?php
                    $sql = "SELECT typeproduct.number,typeproduct.type_name,SUM(product.quantity) FROM product INNER JOIN typeproduct 
                    ON product.number=typeproduct.number GROUP BY typeproduct.type_name ORDER BY typeproduct.number";
                    $result = mysqli_query($conn, $sql);
                    $amount = 0;
                    while($rs=mysqli_fetch_array($result)) {
                        $amount += $rs[2];
                    ?>
                        <tr align=center>
                            <td><?php echo $rs[0]; ?></td>
                            <td><?php echo $rs[1]; ?></td>
                            <td><?php echo $rs[2]; ?></td>
                        </tr>
                        <?php } ?>
                    <tr>
                        <td></td>
                        <td>Total All</td>
                        <td> <?php echo $amount ?></td>
                    </tr>
                </table>
                <br>
            </div>
        </div>
    </table>
    <div align=center>
        <a href="menu.php" class="w3-button w3-black">BACK</a>
    </div>
</body>

</html>