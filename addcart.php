<?php


require 'conn.php';

$proid = $_POST['pro'];

$sql = "SELECT * FROM cart WHERE product_id='$proid'";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
  // output data of each row

$sql1 = "SELECT price FROM product WHERE id='$proid'";
$result1 = mysqli_query($conn, $sql);
$row1 = mysqli_fetch_assoc($result1);


  $row = mysqli_fetch_assoc($result);

    $qty = $row['qty']+1;
    $subtotal = $row1['price']*$qty;


   $sql = "UPDATE cart SET qty='$qty', subtotal = '$subtotal' WHERE product_id='$proid'";
   mysqli_query($conn, $sql);


}



else{

$sql = "SELECT * FROM product WHERE id='$proid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

  $row = mysqli_fetch_assoc($result);

  $price=$row['price'];
  $qty=1;
  $subtotal = $price*$qty;

} 

$sql = "INSERT INTO cart (product_id,price,qty,subtotal)
VALUES ('$proid', '$price', '$qty','$subtotal')";

mysqli_query($conn, $sql);

}

?>