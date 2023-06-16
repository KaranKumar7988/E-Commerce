<?php
require 'conn.php';

$proid =$_POST['pro'];
$qty= $_POST['qty'];

$sql = "SELECT product_id FROM cart WHERE id='$proid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if($row){

    $productid=$row['product_id'];
    $sql1 = "SELECT * FROM product WHERE id='$productid'";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
    
    $subtotal = $row1['price']*$qty;
    
    $sql3 = "UPDATE cart SET qty='$qty', subtotal = '$subtotal' WHERE id='$proid'";
    mysqli_query($conn, $sql3);


    $sql2 = "SELECT sum(subtotal) as sum FROM cart";
    $result2 = mysqli_query($conn, $sql2);

    $row2 = mysqli_fetch_assoc($result2);

    echo $row2['sum'];
}


?>