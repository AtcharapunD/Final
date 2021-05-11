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
    <title>Insert Type Product</title>
</head>

<body>
    <h2 align=center>Insert Type Product</h2>
    <br>
    <form action="inserttype_db.php" method="POST">
        <table>
            <div class="w3-content" style="max-width:700px" align=center>
                <lable for="emergency_name"><b> Number of Type </b></lable>
                <input class="w3-input w3-padding-16 w3-border" type="text" name="number">
            </div>

            <div class="w3-content" style="max-width:700px" align=center>
                <lable for="emergency_name"><b> Name of Type </b></lable>
                <input class="w3-input w3-padding-16 w3-border" type="text" name="type_name">
            </div>

        </table>
        <div align=center>
            <button name="submit" class="w3-button w3-black">SUBMUT</button>
            <a href="typeproduct.php" class="w3-button w3-black">BACK</a>
        </div>
    </form>
</body>

</html>