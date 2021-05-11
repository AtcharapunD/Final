

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <table style="max-width:700px" align="center">
        <h4 align=center><strong>Total all of Product</strong> </h4>
        <div class="row">
            <div class="column">

                <p align=center><strong></strong> </p>
                <table style="max-width:700px" align="center">
                    <tr>
                        <th>Product Number </th>
                        <th>Name</th>
                        <th>Price</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php

                    $conn = mysqli_connect('localhost', 'root', '', 'shoponline');
                    if (!$conn) {
                        die('Connection fail');
                    }

                    $sql = "SELECT * FROM product";
                    $fetch = mysqli_query($conn, $sql);

                    for ($x = 0; $x < mysqli_num_rows($fetch); $x++) {
                        $result[] = mysqli_fetch_array($fetch);
                    }
                    ?>
                </table>
                <br>
            </div>
        </div>
    </table>
    <br>
    <div align=center>
        <a href="menu.php" class="w3-button w3-black">BACK</a>
    </div>
</body>

</html>