<?php
include('server.php');

if(isset($_POST['submit'])){
    $type = $_POST['number'];
    $pd_name = $_POST['product_name'];
    $qtt = $_POST['quantity'];
    $price = $_POST['price'];
}


$sql = "INSERT INTO product (number,product_name,quantity,price) values('$type','$pd_name','$qtt','$price') ";
$result = mysqli_query($conn,$sql);
if ($result){
    header("location:product.php");
}
else{
    echo 'check your query';
}
?>

