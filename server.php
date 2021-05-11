<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ShopOnline";

    // Connect Database

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    // Check connect

    if(!$conn){
        die("Connection failed".mysqli_connect_error());
    }

?>