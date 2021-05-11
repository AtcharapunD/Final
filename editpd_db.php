<?php
include('server.php');

    $productId = $_POST['product_id'];
    $type = $_POST['number'];
    $pd_name = $_POST['product_name'];
    $qtt = $_POST['quantity'];
    $price = $_POST['price'];


$sql = "UPDATE product SET product_id = '$productId',number='$type',product_name='$pd_name',quantity='$qtt',price='$price' 
    WHERE product_id = $productId";

$result = mysqli_query($conn,$sql);
if ($result){
    header("location:product.php");
}
else{
    echo 'Check Your Query';
}
?>