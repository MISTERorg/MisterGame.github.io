<?php

  //start session variable
  session_start();

  require_once('./phpfolder/component.php');
  require_once('./phpfolder/createDb.php');

  //create instance of Createdb class
  $database = new CreateDb("Productdb","Producttb");

  if(isset($_POST['add'])){
    //print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){
      $item_array_id = array_column($_SESSION['cart'],'product_id');
      //print_r($item_array_id);

      if(in_array($_POST['product_id'],$item_array_id)){
        echo"<script> alert('Product is already added in the cart..!')</script>";
        echo "<script>window.location = 'playstation.php'</script>";
      }else{
        $count = count($_SESSION['cart']);
        $item_array = array(
          'product_id' => $_POST['product_id']
        );
        $_SESSION['cart'][$count]=$item_array;
        //print_r($_SESSION['cart']);
      }

    }else{
      $item_array = array(
        'product_id' => $_POST['product_id']
      );

      //Create Session Variable
      $_SESSION['cart'][0] = $item_array;
      //print_r($_SESSION['cart']);
    }
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gaming In Home</title>
  <link rel="stylesheet" href="repaired.css">
  <link rel="stylesheet" href="./css/all.css">
  <link rel="stylesheet" href="./games_style/owl.carousel.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>


  <link rel="stylesheet" type="text/css" href="./css copy/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css copy/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css copy/simple-line-icons.css" />
  <link rel="stylesheet" type="text/css" href="css copy/animate.css" />
  <link rel="stylesheet" type="text/css" href="css copy/owl.carousel.css" />
  <link rel="stylesheet" type="text/css" href="css/owl.theme.css" />
  <link rel="stylesheet" type="text/css" href="css /owl.transitions.css" />
  <!-------------------Boostrap Online------------>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAO8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Document</title>

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
        <h1 class="logo_name">Luminus</h1>
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
  <!---------------------------End of saerch bar### ---------------->


  <!-------------------------------Picture EachBoostarp Carousel------------------------------------>


  <!--------------------------- End Of Picture Each Boostarp Carousel###------------------------------------>

  <!------------Game Review Backgroung Image------------>
  <div class="third_part">
    <div class="banner">

    </div>
  </div>
  <div class="banner-review">
    <h1 class="reviewing">Passion To Repair</h1>
  </div>

  <!------------####Enf Of Game Review Backgroung Image####------------>
  <!------lets get to the body------>
  <div class="page-wrapper">

    <div class="fix_container">
      <div class="fix-message">
        <h3>What We Do</h3>
        <div class="p_tag">
          <p> Here In <span>Luminus LTD Company</span>, We provide common service like the restoration of your Console
            or computers giving great care to it. We also
            provide its maintenance, keeping clean and save from damaging and other issues. We make sure to repair your
            equipment as fast as
            possible by giving you a specify date for the collection. And if within 2 weeks after the restoration the
            issue persits, repayment is
            possible or we take back the equipment or console for further restoration. Please fill in the information
            below about the console or computers
            so that we can specifically know its issue and report to you.</p>
        </div>
      </div>

      <div class="form-fix">
        <div class="form-input">
          <form action="" method="POST">
            <div class="client-name">
              <div class="text">Name *</div>
              <input type="text" placeholder="Your Name" name="name" required>
            </div>
            <div class="client-email">
              <div class="text">Email *</div>
              <input type="email" placeholder="Your email" name="email" required>
            </div>
            <div class="client-number">
              <div class="text">Number *</div>
              <input class="number" type="tel" placeholder="Your Number" name="number" required>
              <img class="whatsapp-png" src="./Homepics/—Pngtree—whatsapp icon whatsapp logo_3584844.png" alt="">
              <br>
              <input id="check" class="checkbtn" type="checkbox" name=""><span class="whatsup">Works With
                WhatApps</span>
            </div>
            <div class="client-choice">
              <div class="text">Device *</div>
              <select name="number" id="numero" required>
                <option value="PS2">Playstation 2</option>
                <option value="PS3">Playstation 3</option>
                <option value="PS4">Playstation 4</option>
                <option value="PSP">Playstation Portable</option>
                <option value="PS Vita">Playstation Vita</option>
                <option value="Xbox 360">Xbox 360</option>
                <option value="Xbox One">Xbox One</option>
                <option value="Nintendo 3DS">Nintendo 3DS</option>
                <option value="Nintendo Switch">Nintendo Switch</option>
                <option value="Wii">Wii Or Wii U</option>
                <option value="Computer">Computer</option>
              </select>
            </div>
            <div class="client-details">
              <div class="text">Report *</div>
              <textarea name="message" class="textarea"
                placeholder="Enter a detail information about the equipment problem" rows="4" required></textarea>
            </div>
            <div class="clients-send">
              <input value="Send" class="send-clt" type="submit">
            </div>
          </form>
        </div>
      </div>

    </div>




    <!-------------Game Rating End--------------->

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

  <script src="./javascript_link/link.js"></script>

  <script>
    //whatsapp brightness effect
    const button = document.querySelector(".checkbtn");
    const png = document.querySelector(".whatsapp-png");

    button.addEventListener("click", () => {
      png.classList.toggle("initial");
    })
  </script>


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
  <!----link to ajax------->
  <script src="script.js"></script>
</body>

</html>