<?php

$page ='about';

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
</head>
<body>
  <!-- <section id="header">

    <a href="index.php"><img src="images/logof.png" class="logo"</a>

    <div>
        <ul id="navbar">

            <li><a  href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
          
            <li><a class = "active" href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="cart.php" id="bag"><i class="uil uil-shopping-cart-alt "></i></a></li>
            <a href="#" id="close"><i class="uil uil-multiply"></i></a>
        </ul>
    </div>

    <div id="mobile">
      <a href="cart.php"><i class="uil uil-shopping-cart-alt"></i></a>
      <i id="bar" class="uil uil-list-ul"></i>
      
    </div>
  </section> -->


  <?php

require "header.php";
  ?>

  <section id="page-header" class="about-header">
   
    <h2>#Know Us</h2>
   
    <p>Lorem ipsum dolor sit amet.</p>
    
  </section>

  <section id="about-head" class="section-p1">
    <img src="images/Flagship_100_Blog_2880x1800_Apparel.jpg" class="image">
    <div >
        <h2>Who We Are ?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo veritatis, dolores enim, velit sit harum cumque earum eveniet commodi architecto itaque quam autem inventore necessitatibus quasi quibusdam ut quae dignissimos ea unde cupiditate eius! Ullam, quam ipsum reiciendis assumenda nostrum incidunt eius animi fugiat veritatis quia deserunt temporibus? Tempore, dolorum? Sint corporis distinctio totam perspiciatis consequuntur, minus quisquam voluptas sunt incidunt magni veritatis quae, excepturi aliquid, quam fuga atque! Iusto nulla doloremque autem sint eius mollitia libero, reprehenderit error provident, cumque repudiandae, perspiciatis architecto eligendi praesentium tenetur ipsum dolor quas aliquam nostrum neque. Ea eum ducimus vero dignissimos obcaecati reprehenderit?</p>
   <abbr title="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim vitae nesciunt mollitia accusamus est natus inventore sint architecto suscipit ut?</abbr>
    
   <br>

   <marquee bgcolor = "#ccc" loop = "-1" scrollamount = "5" width = "100%" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis molestias eos totam aut minus? Temporibus libero accusamus cupiditate optio hic?</marquee>

</div>
  </section>


  <!-- feature section -->

  
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






   <script src="script.js"></script> 
</body>
</html>