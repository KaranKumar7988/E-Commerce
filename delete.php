<?php

require 'conn.php';


$id = $_POST['id'];


$sql = "DELETE FROM cart WHERE id='$id'";
mysqli_query($conn, $sql);


$sql = "SELECT sum(qty) as nop FROM cart";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  $row = mysqli_fetch_assoc($result);
  

  $sql2 = "SELECT sum(subtotal) as sum FROM cart";
  $result2 = mysqli_query($conn, $sql2);

  $row2 = mysqli_fetch_assoc($result2);

  $data['nop'] = $row['nop'];
  $data['sum'] = $row2['sum'];
  
echo json_encode($data);
}
?>