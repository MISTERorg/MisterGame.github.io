<?php
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
        echo "<script>window.location = 'xbox.php'</script>";
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
  <link rel="stylesheet" href="./css/all.css">
  <link rel="stylesheet" type="text/css" href="./games_style/style.css" />

  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>


  <link rel="stylesheet" type="text/css" href="css copy/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/simple-line-icons.css" />
  <link rel="stylesheet" type="text/css" href="css/animate.css" />

  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
  <link rel="stylesheet" type="text/css" href="css/owl.theme.css" />
  <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
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

  <div id="bool" class="smallest">
    <div class="second_board">
      <div class="logo">
        <i> <img class="logo_icon" src="./pictures/ps-icon.png" alt=""></i>
        <h1 class="logo_name">Luminus</h1>
      </div>
      <!-------Lets go for the search bar, i know its difficult but i've got to try ------>
      <div style="" class="search-release">
        <form autocomplete="off" action="details.php" method="post">
          <div class="wrapper_contain">
            <div class="containing_board">
              <div class="search_box">
                <div class="dropdown">
                  <div class="default_option" id="all_container"><span id="names">ALL</span></div>
                  <ul class="contains">
                    <li class="containing">All</li>
                    <li class="containing">Recent</li>
                    <!----<li class="containing">Popular</li>--->
                  </ul>
                </div>
                <div class="search_field">
                  <input type="text" id="search" name="search" class="input" placeholder="Search">
                  <button style="border: none; text-decoration: none;" name="submit" type="submit"><i class="photo"><img
                        id="photo" src="./pictures/search.png" width="30px"></i></button>
                </div>
              </div>
            </div>

          </div>
        </form>
        <div class="col-md-5 search_position" style="position: relative; z-index: 100;">
          <div class="list-group" id="show-list">
            <!-- Here autocomplete list will be display -->
          </div>
        </div>

      </div>




    </div>


    <!---------------------------End of saerch bar### ---------------->


  </div>


  <!-------------Boostarp Carousel------------------------------------>
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./backgroundpics/37.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Get Amazing games</h5>
          <p>Get Hyped Up by Astonishing Games We Offer And Get An Amazing Experience </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./backgroundpics/35.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Have Your Console</h5>
          <p>We Offer You Great Gaming Consoles For Better Experience</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./backgroundpics/38.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Maintain And Fix</h5>
          <p>We Maintain And Fix Either Your Consoles Or Computers As Fast As Possible </p>
        </div>
      </div>


    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="all-in">
    <div class="bg-down">
      <div class="bg-space">
        <button class="brand-name">Accessories</button>
        <a href="items.php"><button class="adding">View Now</button></a>
        <div class="space-container"> <span>Get your Computer or Console Accessories and Items </span>
        </div>
        <p>Get your Computer or Console Accessories and Items </p>


      </div>


    </div>
  </div>



  <!--------------------------- End Of Boostarp Carousel###------------------------------------>





  <!------lets get to the body------>
  <div class="page-wrapper">


    <!--- Lets Go With Gaming Icon-------->

    <div class="games-area">
      <div class="container">
        <div class="row">
          <!-- Single Games Area -->
          <div class="col-12 col-md-4">
            <div class="single-games-area text-center ">
              <img class="png-img img-playstation xbox"
                src="./pictures/5bedba3b1408a-298e2416166e0cea9d1c3905c74b2707.png" alt="">
              <a href="xbox.php" class="gaming-button">View Games</a>
            </div>
          </div>

          <!-- Single Games Area -->
          <div class="col-12 col-md-4">
            <div class="single-games-area text-center">
              <img class="png-img nintendo" src="./pictures/20200723014537!Nintendo_switch_logo.png" alt="">
              <a href="nintendo.php" class="gaming-button">View Games</a>
            </div>
          </div>

          <!-- Single Games Area -->
          <div class="col-12 col-md-4">
            <div class="single-games-area text-center ">
              <img class="png-img img-playstation play" src="./pictures/29129-8-playstation-transparent-background.png"
                alt="">
              <a href="playstation.php" class="gaming-button">View Games</a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <br>

    <!---------End Of Gaming Icon--------->

    <!---------Start Of Consoles photos--------->

    <div class="main">
      <h1 style="font-weight: 600;">New Consoles</h1>
      <h4 style="text-align: center; margin-bottom: -10px; font-weight: 500;">Coming Soon</h4>
      <div class="gallery">
        <div class="image">
          <a href="ps5.php">
            <img src="./Homepics/ps5.jpg" alt="">
          </a>

        </div>
        <div class="image">
          <a href="series.php">
            <img src="./Homepics/xbox.jpg" alt="">
          </a>

        </div>
        <div class="image">
          <a href="switch.php">
            <img src="./Homepics/switch.jpg" alt="">
          </a>

        </div>
      </div>
    </div>

    <!---------END OF CONSOLES PHOTOTS --------->

    <!---------Start Of Gaming Carousel--------->

    <div class="subset">
      <h6 class="new-event">New*</h6>
      <p class="game-profile">PlayStation Games</p>
      <div class="falling">
        <div class="supreme-container">


          <div class="card-carousel">
            <div class="imgbx">
              <a href="review.php">
                <img src="pictures/dbfighterz.JPG" alt="">
              </a>
            </div>
            <div class="message-div">
              <p class="type-of">Fighting & Combat</p>
              <p class="type-in">Fighter Z</p>
              <s style="text-decoration-line: line-through;" class="stroke">50.000FCFA</s>
              <h9 class="stroke-actual">45.000FCFA</h9>
            </div>
          </div>


          <div class="card-carousel">
            <div class="imgbx">
              <a href="review6.php">
                <img src="pictures/Tekken.JPG" alt="">
              </a>
            </div>
            <div class="message-div">
              <p class="type-of">Fighting & Combat</p>
              <p class="type-in">Tekken 7</p>
              <s style="text-decoration-line: line-through;" class="stroke">45.000FCFA</s>
              <h9 class="stroke-actual">40.000FCFA</h9>
            </div>
          </div>
          <div class="card-carousel">
            <div class="imgbx">
              <a href="review3.php">
                <img src="pictures/assassins-creed-valhalla-box-art-01-ps4-22apr20-en-us.jpg" alt="">
              </a>
            </div>
            <div class="message-div">
              <p class="type-of">Action & Adventure</p>
              <p class="type-in">Assassin Creed</p>
              <s style="text-decoration-line: line-through;" class="stroke">45.000FCFA</s>
              <h9 class="stroke-actual">40.000FCFA</h9>
            </div>
          </div>
          <div class="card-carousel">
            <div class="imgbx">
              <a href="review2.php">
                <img src="pictures/cyberpunk-2077-box-art-01-ps4-06jun19-en-us.jpg" alt="">
              </a>
            </div>
            <div class="message-div">
              <p class="type-of">Adventure & Rampage</p>
              <p class="type-in">Cyberpunk-2077</p>
              <s style="text-decoration-line: line-through;" class="stroke">40.000FCFA</s>
              <h9 class="stroke-actual">35.000FCFA</h9>
            </div>
          </div>
        </div>
      </div>


    </div>
    <button type="submit"></button>
    <!---------End Of Gaming Carousel--------->

    <!--------Nintendo Part-------------------->

    <div class="substitute">
      <h6 class="new-stuff">New*</h6>
      <p class="Nin-profile">Nintendo Games</p>
      <div class="almighty">
        <i class="fas fa-angle-left prev"></i>
        <i class="fas fa-angle-right next"></i>
        <div class="Nin-container">
          <div class="Nin-card">
            <a href="nin-review5.php">
              <img src="pictures/375x211_heroMobile_PMO.jpg">
              <div class="messa-box">
                <h4 style="color: grey;">Released: 07/17/2020</h4>
                <p>Paper Mario<i>&#8482</i> : The Oraigami King</p>
                <p class="moning">25000 Fcfa </p>
                <a class="scream" href="#">Nintendo Switch</a>
              </div>
            </a>
          </div>

          <div class="Nin-card">
            <a href="nin-review1.php">
              <img src="pictures/mariokart.jpg">
              <div class="messa-box">
                <h4 style="color: grey;">Released: 04/07/2017</h4>
                <p>New Super<i>&#8482</i> : Mario Kart 8 Deluxe</p>
                <p class="moning">20000 Fcfa</p>
                <a class="scream" href="#">Nintendo Switch</a>
              </div>
            </a>
          </div>
          <div class="Nin-card">
            <a href="nin-review6.php">
              <img src="pictures/papermario.jpg">
              <div class="messa-box">
                <h4 style="color: grey;">Released: 28/06/2019</h4>
                <p>New Super<i>&#8482</i> : Mario Maker 2 Switch</p>
                <p class="moning">20000 Fcfa</p>
                <a class="scream" href="#">Nintendo Switch</a>
              </div>
            </a>
          </div>
          <div class="Nin-card">
            <a href="nin-review8.php">
              <img src="pictures/smashbros.jpg">
              <div class="messa-box">
                <h4 style="color: grey;">Released: 12/07/2018</h4>
                <p>New Super<i>&#8482</i> : Smash Bros Ultimate</p>
                <p class="moning">30000 Fcfa</p>
                <a class="scream" href="#">Nintendo Switch</a>
              </div>
            </a>
          </div>



          <div class="Nin-card">
            <a href="nin-review7.php">
              <img src="pictures/odyssey.jpg">
              <div class="messa-box">
                <h4 style="color: grey;">Released: 09/27/2017</h4>
                <p>New Super<i>&#8482</i> : Mario Odyssey Adventure</p>
                <p class="moning">20000 Fcfa</p>
                <a class="scream" href="#">Nintendo Switch</a>
              </div>
            </a>
          </div>


        </div>
      </div>
    </div>

    <!-----------End of Nintendo Carousel-----#####-->

    <div class="subset xbox-subset">
      <h6 class="xbox-color">New*</h6>
      <p class="game-profile">Xbox Games</p>
      <div class="falling">
        <div class="supreme-container">
          <div class="card-carousel">
            <div class="imgbx">
              <a href="xbox-review1.php">
                <img src="./pictures/x1.jpeg" alt="">
              </a>
            </div>
            <div class="message-div">
              <p class="type-of">Adventure & Action</p>
              <p class="type-in">Borderlands 3</p>
              <s style="text-decoration-line: line-through;" class="stroke">45.000FCFA</s>
              <h9 class="stroke-actual">40.000FCFA</h9>
            </div>
          </div>
          <div class="card-carousel">
            <div class="imgbx">
              <a href="xbox-review3.php">
                <img src="pictures/x3.jpg" alt="">
              </a>
            </div>
            <div class="message-div">
              <p class="type-of">Fighting & Online</p>
              <p class="type-in">PU BattleGrounds</p>
              <s style="text-decoration-line: line-through;" class="stroke">50.000FCFA</s>
              <h9 class="stroke-actual">45.000FCFA</h9>
            </div>
          </div>
          <div class="card-carousel">
            <div class="imgbx">
              <a href="xbox-review5.php">
                <img src="pictures/x5.jpg" alt="">
              </a>
            </div>
            <div class="message-div">
              <p class="type-of">Motosport</p>
              <p class="type-in">NFS Heat</p>
              <s style="text-decoration-line: line-through;" class="stroke">45.000FCFA</s>
              <h9 class="stroke-actual">40.000FCFA</h9>
            </div>
          </div>
          <div class="card-carousel">
            <div class="imgbx">
              <a href="xbox-review7.php">
                <img src="pictures/x7.jpg" alt="">
              </a>
            </div>
            <div class="message-div">
              <p class="type-of">Fighting & Combat</p>
              <p class="type-in">Jump Force</p>
              <s style="text-decoration-line: line-through;" class="stroke">40.000FCFA</s>
              <h9 class="stroke-actual">35.000FCFA</h9>
            </div>
          </div>
        </div>
      </div>


    </div>

    <!---------------Start of backgound for console-------->
    <div class="main">
      <h1 id="get_now" style="font-weight: 600;">Get Yours Now</h1>
      <h4 id="consoles" style="text-align: center; margin-bottom: -10px; font-weight: 500;">Console Available</h4>
    </div>
    <div class="banner">
      <img class="initialise" src="./Homepics/xbox wall.webp" alt="">
      <img class="actualise" src="./popular/ps4-shop-11-2019-MOBILE-v2.jpg" alt="">
    </div>
    <div class="third_part">

      <div class="all-in">
        <div class="bg-down">
          <div class="bg-space">
            <button class="brand-name">Consoles</button>
            <a style="text-decoration: none; color: white;" href="consoles.php"><button class="adding">View
                Now</button></a>
            <div class="space-container"> <span>Get Youself A Console And Have An Amazing Experience</span></div>
            <p>Get Youself A Console And Have An Amazing Experience</p>
          </div>



        </div>
      </div>

    </div>

    <div class="last-part">
      <div class="last-container">
        <img src="./popular/security_fix-512.png" alt="">
        <div class="last-message">
          <h4>We Fix</h4>
          <h5>Your Computer and Console</h5>
          <p>Here In <span>Luminus LTD Company</span>, We provide common service like the restoration of your Console or
            computers
            giving great care to it. We also provide its maintenance, keeping clean and save from damaging and other
            issues. We make sure to repair your equipment as fast as possible by giving you a specify date for the
            collection.</p>
          <a href="repaire.php" style="text-decoration: none; color: white;" class="last-btn"><button>Report
              Problem</button></a>
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
            <span class="text">Douala Cameroon, pk14</span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+237650080031</span>
          </div>
          <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text">eladdaudet1918@gmail.com</span>
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

  <!------Slick link for carousel------>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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
  <!------Slick DataLink----->
  <script src="./slick/slick.js"></script>
  <script src="./slick/slick.min.js"></script>

  <script src="./javascript_link/link.js"></script>
  <script src="script.js"></script>


</body>

</html>