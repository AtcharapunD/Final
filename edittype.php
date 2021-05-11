<?php
include('server.php');

$num=$_REQUEST['number'];

$sql = " SELECT * FROM typeproduct WHERE number = '$num' ";
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
    <title>Edit Type Product</title>
</head>

<body>
    <h2 align="center">Edit Type Product</h2>
    <br>
    <form action="edittype_db.php" method="POST">
        <table border="2" style="width:500px;text-align:center;" align="center">
            <tr>
                <td colspan="2">Edit Type Product</td>
            </tr>
            <tr>
                <td>Number</td>
                <td>
                    <input class="w3-input w3-padding-16 w3-border" type="text" name="number" value=<?php echo "$rs[0]" ?> readonly>
                </td>
            </tr>

            <tr>
                <td>Type Name</td>
                <td>
                    <input class="w3-input w3-padding-16 w3-border" type="text" name="type_name" value=<?php echo "$rs[1]" ?>>
                </td>
            </tr>
        </table>
        <br>
        <div align="center">
            <input type="submit" valuse="submit" class="w3-button w3-green">
            <a href="typeproduct.php" class="w3-button w3-black">BACK</a>
        </div>
    </form>
    
</body>

</html>