
<?php

require 'conn.php';

$sql = "SELECT sum(qty) as nop FROM cart";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  $row = mysqli_fetch_assoc($result);
}

?>


<section id="header">

<a href="index.php"><img src="images/logof.png" class="logo"></a>

<div>
    <ul id="navbar">

        <li><a class="<?php if($page=='home'){echo 'active';} ?>" href="index.php">Home</a></li>
        <li><a class="<?php if($page=='shop'){echo 'active';} ?>" href="shop.php">Shop</a></li>
        <li><a class="<?php if($page=='about'){echo 'active';} ?>" href="about.php">About</a></li>
        <li><a class="<?php if($page=='contact'){echo 'active';} ?>" href="contact.php">Contact</a></li>
        <li><a class="<?php if($page=='cart'){echo 'active';} ?>" href="cart.php" id="bag"><i class="uil uil-shopping-cart-alt" id="cart"><?php echo $row['nop']?></i></a></li>
        <a href="#" id="close"><i class="uil uil-multiply"></i></a>
    </ul>
</div>

<div id="mobile">
<h6>  <a href="cart.php"><i class="uil uil-shopping-cart-alt main"></i></a></h6>
  <i id="bar" class="uil uil-list-ul"></i>
  
</div>
</section>