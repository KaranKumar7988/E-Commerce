
<?php

require 'conn.php';

$page ='home';



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


  <section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons upto 60% off</p>
    <a href = "shop.php"><button class="shop"> Shop  Now</button></a>
  </section>

  <section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="images/delivery.avif" alt="">
        <h6>Free Shipping</h6>
    </div>

    
      <div class="fe-box">
          <img src="images/Order ahead-rafiki.svg" alt="">
          <h6>Online Order</h6>
        </div>
      
        <div class="fe-box">
            <img src="images/Finance leaders-amico.svg" alt="">
            <h6>Save Money</h6>
        </div>

        
          <div class="fe-box">
              <img src="images/Shop giveaway-pana.svg" alt="">
              <h6>Promotions</h6>
          </div>
          
            <div class="fe-box">
                <img src="images/Honesty-pana.svg" alt="">
                <h6>Happy Sell</h6>
            </div>

            <div class="fe-box">
              <img src="images/Service 24_7-pana.svg" alt="">
              <h6>24/7 Support</h6>
          </div>
  </section>

  <!-- featured products -->

  <section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
      

    <?php
$sql = "SELECT * FROM product WHERE list='Featured'";
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

// <a href='addcart.php?pid=1&id=".$row['id']."'><i class='uil uil-shopping-cart-alt cart'></i></a>
?>

     

         </div>


  </section>

  <div class="select">

  </div>

  <!-- banner section -->

  <section id="banner" class="section-m1">
    <!-- <h4>Repair Services</h4> -->
    <h2>Upto<span> 70% OFF</span> - All T-Shirts & Accessories</h2>

   <a href = "shop.php"> <button class="normal">Explore More</button></a>
  </section>

  <section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
    
    
    <?php
$sql = "SELECT * FROM product WHERE list='New'";
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

  <!-- display banner section -->

  <section id="sm-banner" class="section-p1">
    <div class="banner-box">
      <h4>Crazy Deals</h4>
      <h2>Buy 1 Get 1 Free</h2>
      <span>New Trending Clothings Are on Sale</span>
      <button class="white">Learn More</button>
    </div>

    <div class="banner-box banner-box2">
      <h4>Summer</h4>
      <h2>Upcoming Season</h2>
      <span>Its Getting Hot</span>
      <button class="white">Learn More</button>
    </div>

  </section>

  <!-- small banners text -->

  <section id="banner3">
    <div class="banner-box">
     
      <h2>Seasonal Sale</h2>
      <h3>Winter Collection - 50% OFF</h3>
     
    </div>

  
      <div class="banner-box  banner-box2">
       
        <h2>Hoodies</h2>
        <h3>Special For Winters</h3>
       
      </div>

     
        <div class="banner-box  banner-box3">
         
          <h2>T-Shirts</h2>
          <h3>New Trendy Prints</h3>
         
        </div>


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

<?php

require 'footer.php';

?>


<script>

function add(x){

  // add to cart
  $.ajax({
    type: "POST",
    url: "addcart.php",
    data: {
      pro:x
    },
    success: function (data) {
      
      $.ajax({
        type: "POST",
        url: "count.php",
        data:{a:1},
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