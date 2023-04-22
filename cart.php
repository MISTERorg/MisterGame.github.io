<?php
  session_start();

  require_once("./phpfolder/createDb.php");
  require_once("./phpfolder/component.php");

  $database = new CreateDb("Productdb","Producttb");
  
  if(isset($_GET['action'])){
    if($_GET['action'] == 'remove'){
      foreach($_SESSION['cart'] as $key => $product_id){
        if($product_id["product_id"]==$_GET['id']){
          unset($_SESSION['cart'][$key]);
          echo "<script>alert('Product has been Removed..!')</script>";
          echo "<script> window.location = 'cart.php'</script>";
        }
      }
      $_SESSION['cart'] = array_values($_SESSION['cart']);
    }

  }
?>
<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Responsive Website</title>
  <link rel="stylesheet" href="./games_style/carting.css">
  <link rel="stylesheet" href="./css/all.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <link rel="stylesheet" type="text/css" href="css copy/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css copy/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css copy/simple-line-icons.css" />

  <!-------------------Boostrap Online------------>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAO8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
    body {
      font-family: 'Poppins';
    }
  </style>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <!-----nav bar----->
  <div class="biggest">
    <?php
      require_once ("header.php");
    ?>
  </div>

  <!----end of nav bar--->

  <div id="bool" class="smallest">
    <div class="second_board">
      <div class="logo">
        <i> <img class="logo_icon" src="./pictures/ps-icon.png" alt=""></i>
        <h1 class="logo_name">Mister</h1>
      </div>
      <!-------Lets go for the search bar, i know its difficult but i've got to try ------>
      <div class="search-release">
        <?php
          require_once ("searchbar.php");
        ?>
      </div>


    </div>
    <!---------------------------End of saerch bar### ---------------->
  </div>



  <!------lets get to the body------>
  <div class="page-wrapper">
    <div class="container-fluid">
      <div class="row px-5">
        <div class="col-md-7">
          <div class="shopping-cart">
            <h5>My Cart</h5>
            <hr>
            <?php
              if(isset($_SESSION['cart'])){
                if(isset($_POST['qty'])){
                  $connect = mysqli_connect('localhost', 'root', '', 'Productdb');
                  $qty = $_POST['qty'];
                  $pid = $_POST['pid'];
                  $pprice = $_POST['pprice'];
        
                  $prdTotal = $qty * $pprice ;
                  $query = "UPDATE `producttb` SET `quantity` = '$qty', `Total` = '$prdTotal' WHERE `producttb`.`id` = $pid"; 
                  $stmt = mysqli_query($connect, $query);
        
                  if($stmt){
                    print_r("quantity added");
                  }
                  else{
                    print_r("quantity not added");
                  }
                }             
              }
              //
              $total = "0";
              $amount = "500";
              $quantity = "0";
              if(isset($_SESSION['cart'])){
                $product_id = array_column($_SESSION['cart'],'product_id');

                $result=$database->getData();
                while($row = mysqli_fetch_assoc($result)){
                  
                  foreach ($product_id as $id){

                    /*----if(isset($_GET['action'])){
                      if($_GET['action'] == 'remove'){
                        if(isset($_SESSION['cart'])){
                          $connect = mysqli_connect('localhost', 'root', '', 'Productdb');
                          $qty = 1;
                          $product_id = array_column($_SESSION['cart'],'product_id');
                          $price = $row['product_price'];
                          $prt = $qty * $price;
                          $query = "UPDATE `producttb` SET `quantity` = '$qty', `Total` = '$prt' WHERE `producttb`.`id` = $product_id; "; 
                          $boom = mysqli_query($connect, $query);
                
                          if($boom){
                            print_r("quantity added");
                          }
                          else{
                           print_r("quantity not added");
                          }
                        }
                      }
                    }
                    */

                    if($row['id']==$id){
                      cartElement($row['id'], $row['product_image'],$row['product_name'],$row['product_price'],$row['id'], $row['quantity'], $row['Total']);
                      $total = $total + (int)$row['Total'];
                      $quantity = $quantity + (int)$row['quantity'];
                    }
                  }
                  $total_amount = $total + $amount;



                }
              }else{
                echo "<h5>Cart is Empty</h5>";
              }
            ?>
            <?php

            ?>


          </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
          <div class="pt-4">
            <h5>PRICE DETAILS</h5>
            <hr>
            <div class="row price-details">
              <div class="col-md-6">
                <?php
                  if(isset($_SESSION['cart'])){
                    count($_SESSION['cart']);
                    echo "<h6>Price ($quantity items)</h6>";
                  }else{
                    echo "<h6>Price (0 items)</h6>";
                  }
                ?>
                <h6>Delivery Chargers</h6>
                <hr>
                <h6>Amount Payable</h6>
              </div>
              <div class="col-md-6">
                <h6><?php echo "$total FCFA"; ?></h6>
                <h6 class="text-success">500FCFA</h6>
                <hr>
                <h6>FCFA <?php 
                  if(isset($_SESSION['cart'])){
                    echo $total_amount;
                  }
                ?></h6>
              </div>
              <div class="booling col-md-12">
                <hr width="90%">
                <input style="width: 90%;" class="proceed-btn" type="submit" value="Proceed with Payment">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <footer>
    <!----- About Us Section----->
    <div class="main-content">
      <div class="left box">
        <h2 class="foot">About Us</h2>
        <div class="content">
          <p class="footing">Patrick Junior is a young programmer who can teach you web designing, web development,
            photoshop, html and
            css tutorials, hover animation and effects, javascript and jquery and related so on.</p>
          <div class="social">
            <a class="cool" href="#"><span class="fab fa-facebook-f"></span></a>
            <a class="cool" href="#"><span class="fab fa-twitter"></span></a>
            <a class="cool" href="#"><span class="fab fa-instagram"></span></a>
            <a class="cool" href="#"><span class="fab fa-youtube"></span></a>
          </div>
        </div>
      </div>
      <!------Adress section---->
      <div class="center box">
        <h2 class="foot">Address</h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">Douala Cameroon, Cite sic</span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+237697682675</span>
          </div>
          <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text">ogambapatrickjunior@gmail.com</span>
          </div>
        </div>
      </div>
      <!---messaging section-->
      <div class="right box">
        <h2 class="foot">Contact Us</h2>
        <div class="content">
          <form action="form.php" method="POST" name="myemailform">
            <div class="name1">
              <div class="text">Name *</div>
              <input type="text" placeholder="Name" name="name" required>
            </div>
            <div class="email1">
              <div class="text">Email *</div>
              <input type="email" placeholder="Your email" name="email" required>
            </div>
            <div class="msg1">
              <div class="text">Message *</div>
              <textarea name="message" class="textarea" placeholder="Your Message" cols="25" rows="4"
                required></textarea>
            </div>
            <div class="btn550">
              <input onclick="myFunction()" value="Send" class="btn1" type="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="bottom">
      <center>
        <span>Created By <a href="#">Patrick Junior</a> |</span>
        <span class="far fa-copyright"></span><span> 2020 All right are reserved.</span>
      </center>
    </div>


  </footer>


  <a class="gotop123" href="#bool"><i style="color: white;" class="fas fa-arrow-up"></i></a>

  <!----<script>
    let subs = document.getElementById("subtraction");
    let adds = document.getElementById("addition");
    let textview = document.getElementById("textview");

    subs.addEventListener("click", () => {
      if(textview.value != 1){
        textview.value = parseInt(textview.value) - 1;
    }
    else{
      textview.value=textview.value;
    }
    })

    adds.addEventListener("click", () => {
      
      textview.value = parseInt(textview.value) + 1;
    })
  </script>----->



  <script src="./javascript_link/link.js"></script>

  <!--------Boostrap Online link-------->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
  <!-- jQuery-2.2.4 js -->
  <script src="js/jquery/jquery-2.2.4.min.js"></script>
  <!-- Popper js -->
  <script src="js/bootstrap/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <!-- All Plugins js -->
  <script src="js/plugins/plugins.js"></script>
  <!-- Active js -->
  <script src="js/active.js"></script>
  <script src="script.js"></script>

  <script>
    function myButton(){
      location.reload();
    }
  </script>
</body>

</html>