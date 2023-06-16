<?php

require 'conn.php';

$page = 'cart';



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


  <section id="page-header" class="about-header">

    <h2>#Lets's Talk</h2>

    <p>We Love To Hear Word From You. </p>

  </section>



  <!-- cart section -->

  <section id="cart" class="section-p1">
    <table width="100%">
      <thead>
        <tr>
          <td>Remove</td>
          <td>Image</td>
          <td>Product</td>
          <td>Price</td>
          <td>Quantity</td>
          <td>Subtotal</td>
        </tr>
      </thead>
      <tbody>

      <!-- display all cart item -->
        <?php

        $sql = "SELECT *FROM cart";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row

          while ($row = mysqli_fetch_assoc($result)) {

            $prid = $row['product_id'];
            $sql1 = "SELECT * FROM product WHERE id='$prid'";
            $result1 = mysqli_query($conn, $sql1);

            $row1 = mysqli_fetch_assoc($result1);
            $id = $row['id'];
            echo "

    <tr id='deleteid".$row['id']."'>
    <td><a onclick='ddelete(" . $row['id'] . ")'><i class='uil uil-times-circle'></i></a></td>
    <td><img src='" . $row1['image'] . "'></td>
    <td>" . $row1['product_name'] . "</td>
    <td>$<span class='price'>" . $row['price'] . "</span></td>

    <td><input type='number' class='qty' value='" . $row['qty'] . "' onchange='fun(this.value," . $row['id'] . ")' min='1'></td>
    <td>$<span class='sub'>" . $row['subtotal'] . "</span></td>
</tr>

    ";
          }
        }

        ?>

        <script>

          // for qty and subtotal
          function fun(x, y) {
            $.ajax({
              type: "POST",
              url: "qty.php",
              data: {
                pro: y,
                qty: x
              },

              success: function(response) {
                $(".subtotal").html(response);
                $.ajax({
                  type: "POST",
                  url: "count.php",
                  data: {
                    a: 1
                  },
                  success: function(data) {
                    $("#cart").html(data);
                  }
                });

              }
            });




            let price = document.getElementsByClassName("price");
            let qy = document.getElementsByClassName("qty");
            let subtotal = document.getElementsByClassName("sub");


            for(let i=0;i<price.length;i++){

              subtotal[i].textContent=(price[i].textContent*qy[i].value);
            }

          }


          // delete item from cart
          function ddelete(x){

            if(confirm('Are you sure?')){

              $.ajax({
                type: "POST",
                url: "delete.php",
                data: {
                  id:x
                },
                dataType:"JSON",
                success: function (data) {
                  $("#deleteid"+x).hide('slow');
                  $("#cart").html(data.nop);
                  $(".subtotal").html(data.sum);
                }
              });
          }
        }
        

        </script>

      </tbody>
    </table>
  </section>

  <section id="cart-add" class="section-p1">
    <div id="coupon">
      <h3>Apply Coupon</h3>
      <div>
        <input type="text" placeholder="Enter Your Coupon">
        <button class="normal">Apply</button>
      </div>
    </div>

    <div id="subtotal">
      <h3>Cart Totals</h3>
      <table>
        <tr>

          <?php

          $sql2 = "SELECT sum(subtotal) as sum FROM cart";
          $result2 = mysqli_query($conn, $sql2);

          $row2 = mysqli_fetch_assoc($result2);


          ?>
         

          <td>Cart Subtotal</td>
          <td>$<span class="subtotal"><?php echo $row2['sum'] ?></span></td>

        </tr>

        <tr>

          <td>Shipping</td>
          <td>Free</td>
        </tr>

        <tr>
          <td><strong>Total</strong></td>
          <td><strong>$</strong><strong class=subtotal><?php echo $row2['sum'] ?></strong></td>
        </tr>

      </table>

      <button class="normal">Proceed To checkout</button>

    </div>

  </section>




  <!-- footer section -->


  <?php

  require 'footer.php';

  ?>





  <script src="script.js"></script>
</body>

</html>