<?php

$page ='contact';

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

    <a href="index.html"><img src="images/logof.png" class="logo"></a>

    <div>
        <ul id="navbar">

            <li><a  href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
          
            <li><a href="about.php">About</a></li>
            <li><a class="active" href="contact.html">Contact</a></li>
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
   
    <h2>#Lets's Talk</h2>
   
    <p>We Love To Hear Word From You. </p>
    
  </section>

  <section id="contact-details" class="section-p1" >
    <div class="details">
        <span>Get In Touch</span>
        <h2>Visit One Of Our Offline Store</h2>
        <h3>Head office</h3>
        <div>
            <li>
                <i class="uil uil-map"></i>
                <p>Sector 7 , Meham Road Gohana 131301</p>

            </li>

            <li>
                <i class="uil uil-envelope-edit"></i>
                <p>onepiece@gmail.com</p>
                
            </li>

            <li>
                <i class="uil uil-phone"></i>
                <p>+7988800088 , 020201</p>
                
            </li>

            <li>
                <i class="uil uil-clock"></i>
                <p>Monday To Saturday : 9.00am to 6.00pm</p>
                
            </li>

        </div>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6970.300510468436!2d76.6925686253829!3d29.13075827889545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390decd04d1013bd%3A0xfe10f8d62eb1d54f!2sSector%207%2C%20Gohana%2C%20Haryana%20131301!5e0!3m2!1sen!2sin!4v1677230594721!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>


  <section id="form-details" class="section-p1">

    <form action="">
        <span>Leave A Message</span>
        <h2>We Love To Hear From You</h2>
        <input type="text" placeholder="Your Name">
        <input type="text" placeholder="E-Mail">
        <input type="text" placeholder="Subject">
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <button class="normal">Submit</button>
    </form>

    <div class="people">
        <div>
            <img src="images/karan.jpg">
            <p><span>Karan Kumar</span> Senior Marketing Manager<br>Phone: + 7988158242 <br>Email : karansetiya03@gmail.com</p>
        </div>

        <div>
            <img src="images/karan.jpg">
            <p><span>Karan Kumar</span> Senior Marketing Manager<br>Phone: + 7988158242 <br>Email : karansetiya03@gmail.com</p>
        </div>

        <div>
            <img src="images/karan.jpg">
            <p><span>Karan Kumar</span> Senior Marketing Manager<br>Phone: + 7988158242 <br>Email : karansetiya03@gmail.com</p>
        </div>
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