<?php
include('server.php');

    $num = $_POST['number'];
    $ty_name = $_POST['type_name'];

    $sql = "UPDATE typeproduct SET type_name='$ty_name' WHERE number = $num";
    $result = mysqli_query($conn,$sql);
    if ($result){
        header("location:typeproduct.php");
    }
    else{
        echo 'Check Your Query';
    }

?>
