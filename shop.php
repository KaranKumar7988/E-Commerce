<?php

require 'conn.php';

$page='shop';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECommerce Website</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
 
<?php

require 'header.php';

?>
  <section id="page-header">
   
    <h2>#Stay Home</h2>
   
    <p>Save more with coupons upto 60% off</p>
    
  </section>

  

  <!-- featured products -->

  <section id="product1" class="section-p1">
   
    <div class="pro-container">
    <?php
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "

    <div class='pro'>
    <img src='".$row['image']."'>
    <div class='des'>
      <span>".$row['product_name']."</span>
      <h5>".$row['product_type']."</h5>
      <div class='star'>
        <i class='uis uis-star'></i>
        <i class='uis uis-star'></i>
        <i class='uis uis-star'></i>
        <i class='uis uis-star'></i>
        <i class='uis uis-star'></i> 
      </div>

      <h4>$".$row['price']."</h4>

    </div>

    <button style='cursor: pointer;' onclick='add(".$row['id'].")'><i class='uil uil-shopping-cart-alt cart'></i></button>
   
  </div>

    
    ";
  }
} 


?>
    </div>


  </section>

  <!-- pagination -->

  <section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="cart.php"><i class="uil uil-shopping-cart-alt "></i></a>
  </section>

 
 

  <!-- newsletter section -->

  <section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
      <h4>Sign Up for Newsletters</h4>
      <p>Get E-Mail updates about your latest shop shop and <span>special offers.</span></p>
    </div>

    <div class="form">
      <input type="text" placeholder = "Your Email Address">
      <button class="normal
      ">Sign Up</button>
    </div>
  </section>

  <!-- footer section -->

<footer class="section-p1">
  <div class="col">
    <img src="images/logof.png" class="logo">
    <h4>Contact</h4>
    <p><strong>Address :</strong> Main Market , Sector 7 , New Delhi</p>
    <p><strong>Phone: </strong>+01 2222 999 / (+91) 7988676767</p>
    <div class="follow">
      <h4>Follow Us</h4>
      <div class="icon">
        <i class="uil uil-instagram"></i>
        <i class="uil uil-facebook"></i>
        <i class="uil uil-twitter"></i>
        <i class="uil uil-youtube"></i>

      </div>
    </div>
    </div>

    <div class="col">
    <h4>About</h4>
    <a href="#">About Us</a>
    <a href="#">Delivery Information</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Terms & Conditions</a>
    <a href="#">Contact Us</a>


  </div>

  <div class="col">
  <h4>My Account</h4>
  <a href="#">Sign In</a>
  <a href="#">View Cart</a>
  <a href="#">My Wishlist</a>
  <a href="#">Track My Order</a>
  <a href="#">Help</a>


</div>

<div class="copyright">
  <p>Copyright &copy; One Piece Clothing.com</p>
</div>
</footer>


<script>

function add(x){

// add to cart

  $.ajax({
    type: "POST",
    url: "addcart.php",
    data: {pro:x},
    success: function (data) {
      
      $.ajax({
        type: "POST",
        url: "count.php",
       success: function (data) {
          $("#cart").html(data);
        }
      });

    }
  });
}



</script>

   <script src="script.js"></script> 
</body>
</html>