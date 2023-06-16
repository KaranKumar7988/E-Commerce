
<?php

require 'conn.php';

  $sql = "SELECT sum(qty) as nop FROM cart";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    
    echo $row['nop'];
    
  }



?>