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
    <title>Type Of Product</title>
</head>

<body>
    <table style="max-width:700px" align="center">
        <h4 align=center><strong>Type Product</strong> </h4>
        <div class="row">
            <div class="column">
                <p align=center><strong></strong> </p>
                <table style="max-width:700px" align="center">
                    <tr>
                        <td>Type ID</td>
                        <td>Type Name</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <?php
                    $sql = "SELECT * FROM typeproduct";
                    $re = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($re)) : ?>
                        <tr>
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo $row['type_name']; ?></td>
                            <td><a href="edittype.php?number=<?php echo $row['number']?> " class="w3-button w3-blue">edit</a></td>
                            <td><a href="deletetype.php?number=<?php echo $row['number'] ?> " class="w3-button w3-red">delete</a></td>
                        </tr>
                    <?php endwhile ?>

                </table>
                <br>
            </div>
        </div>
        <div align=center>
            <a href="inserttype.php" class="w3-button w3-green">INSERT</a>
            <a href="menu.php" class="w3-button w3-black">BACK</a>
        </div>
    </table>
    <br>
</body>

</html>