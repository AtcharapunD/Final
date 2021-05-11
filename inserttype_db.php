<?php
include('server.php');

if(isset($_POST['submit'])){
    $num = $_POST['number'];
    $ty_name = $_POST['type_name'];
}

$sql = "INSERT INTO typeproduct(number,type_name) VALUES ('$num','$ty_name')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location:typeproduct.php");
} else {
    echo 'Check Your Query';
}
?>