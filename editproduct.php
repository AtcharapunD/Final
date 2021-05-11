<?php
include('server.php');

$productId = $_REQUEST['product_id'];


$sql = " SELECT * FROM product WHERE product_id = '$productId' ";
$result = mysqli_query($conn, $sql);
$rs = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="index.css">
    <title>Edit Product</title>
</head>

<body>
    <h2 align="center">Edit Product</h2>
    <br>
    <form action="editpd_db.php" method="POST">
        <table border="2" style="width:500px;text-align:center;" align="center">
            <tr>
                <td colspan="2">Edit product</td>
            </tr>
            <tr>
                <td>Number</td>
                <td>
                    <input class="w3-input w3-padding-16 w3-border" type="text" name="product_id" value=<?php echo "$rs[0]" ?> readonly>
                </td>
            </tr>
            <tr>
                <td>Type Product</td>
                <td>
                    <select class="w3-input w3-padding-16 w3-border" id="number" name="number">
                    <?php
                    $sql = "SELECT * FROM typeproduct";
                    $re = mysqli_query($conn, $sql);
                    ?>
                    <?php
                    while ($row = mysqli_fetch_array($re)) { ?>
                        <option value="<?php echo "$rs[1]" ?>"> <?php echo $row['type_name'] ?> </option>
                    <?php } ?>
                </select>
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td>
                    <input class="w3-input w3-padding-16 w3-border" type="text" name="product_name" value=<?php echo "$rs[2]" ?>>
                </td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td>
                    <input class="w3-input w3-padding-16 w3-border" type="text" name="quantity" value=<?php echo "$rs[3]" ?>>
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td>
                    <input class="w3-input w3-padding-16 w3-border" type="text" name="price" value=<?php echo "$rs[4]" ?>>
                </td>
            </tr>
        </table>
        <br>
        <div align="center">
            <input type="submit" valuse="submit" class="w3-button w3-green">
            <a href="product.php" class="w3-button w3-black">BACK</a>
        </div>
    </form>
    <br>
    
</body>
</html>