<?php
include('server.php');
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
    <title>Insert Product</title>
</head>

<body>
    <h2 align=center>Insert Product</h2>
    <br>
    <form action="insertproduct_db.php" method="POST">
        <table>
            

            <div class="w3-content" style="max-width:700px" align=center>
                <lable for="room"><b> Number of Type product </b></lable>
                <select class="w3-input w3-padding-16 w3-border" id="number" name="number">
                    <?php
                    $sql = "SELECT * FROM typeproduct";
                    $re = mysqli_query($conn, $sql);
                    ?>
                    <?php
                    while ($row = mysqli_fetch_array($re)) { ?>
                        <option value="<?php echo $row['number'] ?>"> <?php echo $row['type_name'] ?> </option>
                    <?php } ?>
                </select>
            </div>

            <div class="w3-content" style="max-width:700px" align=center>
                <lable for="emergency_name"><b> Product Name </b></lable>
                <input class="w3-input w3-padding-16 w3-border" type="text" name="product_name" placeholder="Product Name">
            </div>

            <div class="w3-content" style="max-width:700px" align=center>
                <lable for="emergency_name"><b> Quantity </b></lable>
                <input class="w3-input w3-padding-16 w3-border" type="text" name="quantity" placeholder="Quantity">
            </div>

            <div class="w3-content" style="max-width:700px" align=center>
                <lable for="emergency_name"><b> Price </b></lable>
                <input class="w3-input w3-padding-16 w3-border" type="text" name="price" placeholder="Price">
            </div>

        </table>
        <br>
        <div align=center>
            <button name="submit" class="w3-button w3-green">SUBMUT</button>
            <a href="product.php" class="w3-button w3-black">BACK</a>
        </div>
    </form>
</body>

</html>