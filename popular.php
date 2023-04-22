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
        echo "<script>window.location = 'nintendo.php'</script>";
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
  <title>My Responsive Website</title>
  <link rel="stylesheet" href="./games_style/popularity.css">
  <link rel="stylesheet" href="./css/all.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <link rel="stylesheet" type="text/css" href="css copy/bootstrap.min.css" />
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
  <div class="banner">
    <img class="actualise" src="./Homepics/2426440.jpg" alt="">
    <img class="initialise" src="./pictures/SpiderManMilesMorales-Hero500.jpg" alt="">

  </div>
  <div class="third_part">
    <div class="all-in">
      <div class="bg-down">
        <div class="bg-space">

          <button class="brand-name">Popular Games</button>
          <button class="adding"> New Games</button>
          <div class="space-container"> <span>Get An Amazing Experience With Our Most Popular Games</span></div>
          <p>Get An Amazing Experience With Our Most Popular Games</p>

        </div>



      </div>
    </div>

  </div>


  <!------lets get to the body------>
  <div class="page-wrapper">


    <!-------------------------Start Of Card Filtering Carousel For Popular--------------------->
    <div class="container">

      <div class="row">

        <div class="col-lg-12">


          <ul class="filters text-left">
            <li class="active" data-filter="*"><a href="#!">All</a></li>
            <li data-filter=".html"><a href="#!">PlayStation</a></li>
            <li data-filter=".css"><a href="#!">Xbox</a></li>
            <li data-filter=".javascript"><a href="#!">Nintendo</a></li>
          </ul>

          <div class="projects">

            <div class="row">

              <div class="col-lg-4 item html">

                <div class="card">
                  <a style="text-decoration: none;" href="review11.php">

                    <div class="card-head">
                      <img src="./popular/large-LOU2.jpg" alt="" class="img-fluid card-img">
                    </div>
                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                      <div>
                        <div>
                          <div class="product_name"><a href="review11.php">The Last Of Us Part 2</a>
                          </div>
                          <div class="product_category">Action-adventure</div>
                        </div>
                      </div>
                      <div class="ml-auto text-right">
                        <div class="rating">
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                        </div>
                        <div class="product_price text-right">30000F<span>CFA</span></div>
                      </div>
                    </div>
                  </a>
                </div>

              </div>

              <div class="col-lg-4 item css">

                <div class="card">

                  <a style="text-decoration: none;" href="xbox-review1.php">


                    <div class="card-head">
                      <img src="./popular/borderland.jpg" alt="" class="img-fluid card-img">

                    </div>
                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                      <div>
                        <div>
                          <div class="product_name"><a href="xbox-review1.php">Borderland 3</a>
                          </div>
                          <div class="product_category">Action & Shoot</div>
                        </div>
                      </div>
                      <div class="ml-auto text-right">
                        <div class="rating">
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star-half"></i>
                        </div>
                        <div class="product_price text-right">40000F<span>CFA</span></div>
                      </div>
                    </div>

                </div>
                </a>

              </div>

              <div class="col-lg-4 item javascript">
                <a style="text-decoration: none;" href="nin-review1.php">
                  <div class="card">

                    <div class="card-head">
                      <img src="./pictures/mariokart.jpg" alt="" class="img-fluid card-img">

                    </div>
                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                      <div>
                        <div>
                          <div class="product_name"><a href="nin-review1.php">Mario Kart 8</a>
                          </div>
                          <div class="product_category">Kart Racing</div>
                        </div>
                      </div>
                      <div class="ml-auto text-right">
                        <div class="rating">
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star-half"></i>
                        </div>
                        <div class="product_price text-right">20000F<span>CFA</span></div>
                      </div>
                    </div>

                  </div>
                </a>
              </div>

              <div class="col-lg-4 item html">
                <a style="text-decoration: none;" href="review9.php">
                  <div class="card">

                    <div class="card-head">
                      <img src="./popular/large-spidey.jpg" alt="" class="img-fluid card-img">

                    </div>
                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                      <div>
                        <div>
                          <div class="product_name"><a href="review9.php">Marvel Spiderman</a>
                          </div>
                          <div class="product_category">Adventure & Combat</div>
                        </div>
                      </div>
                      <div class="ml-auto text-right">
                        <div class="rating">
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i class="far fa-star"></i>
                        </div>
                        <div class="product_price text-right">30000F<span>CFA</span></div>
                      </div>
                    </div>

                  </div>
                </a>
              </div>

              <div class="col-lg-4 item css">
                <a style="text-decoration: none;" href="xbox-review7.php">
                  <div class="card">

                    <div class="card-head">
                      <img src="./popular/jumpforce.jpg" alt="" class="img-fluid card-img">

                    </div>
                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                      <div>
                        <div>
                          <div class="product_name"><a href="xbox-review7.php">JumpForce Xbox</a>
                          </div>
                          <div class="product_category">Fighting & Combat</div>
                        </div>
                      </div>
                      <div class="ml-auto text-right">
                        <div class="rating">
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i class="far fa-star"></i>
                        </div>
                        <div class="product_price text-right">35000F<span>CFA</span></div>
                      </div>
                    </div>

                  </div>
                </a>

              </div>

              <div class="col-lg-4 item html">

                <div class="card">
                  <a style="text-decoration: none;" href="review.php">
                    <div class="card-head">
                      <img src="./popular/dragon-ball-fighterz-switch-hero.jpg" alt="" class="img-fluid card-img">
                    </div>
                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                      <div>
                        <div>
                          <div class="product_name"><a href="review.php">DB Fighter Z</a>
                          </div>
                          <div class="product_category">Action & Combat</div>
                        </div>
                      </div>
                      <div class="ml-auto text-right">
                        <div class="rating">
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                        </div>
                        <div class="product_price text-right">35000F<span>CFA</span></div>
                      </div>
                    </div>
                  </a>
                </div>

              </div>


              <div class="col-lg-4 item css">

                <div class="card">
                  <a style="text-decoration: none;" href="xbox-review5.php">
                    <div class="card-head">
                      <img src="./popular/nfs.jpg" alt="" class="img-fluid card-img">

                    </div>
                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                      <div>
                        <div>
                          <div class="product_name"><a href="xbox-review5.php">NFS Heat Xbox</a>
                          </div>
                          <div class="product_category">Racing</div>
                        </div>
                      </div>
                      <div class="ml-auto text-right">
                        <div class="rating">
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="far fa-star"></i>
                        </div>
                        <div class="product_price text-right">40000F<span>CFA</span></div>
                      </div>
                    </div>
                  </a>
                </div>

              </div>

              <div class="col-lg-4 item javascript">

                <div class="card">
                  <a style="text-decoration: none;" href="nin-review6.php">
                    <div class="card-head">
                      <img src="./pictures/papermario.jpg" alt="" class="img-fluid card-img">

                    </div>
                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                      <div>
                        <div>
                          <div class="product_name"><a href="nin-review6.php">Mario Marker 2</a>
                          </div>
                          <div class="product_category">Level editor, platform</div>
                        </div>
                      </div>
                      <div class="ml-auto text-right">
                        <div class="rating">
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star-half"></i>
                        </div>
                        <div class="product_price text-right">20000F<span>CFA</span></div>
                      </div>
                    </div>
                  </a>

                </div>

              </div>

              <div class="col-lg-4 item html">

                <div class="card">
                  <a style="text-decoration: none;" href="review12.php">
                    <div class="card-head">
                      <img src="./popular/large-RDR.jpg" alt="" class="img-fluid card-img">

                    </div>
                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                      <div>
                        <div>
                          <div class="product_name"><a href="review12.php">Red Dead Redemption 2</a>
                          </div>
                          <div class="product_category">Adventure & Combat</div>
                        </div>
                      </div>
                      <div class="ml-auto text-right">
                        <div class="rating">
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="fas fa-star"></i>
                          <i style="font-size: 13px;" class="far fa-star"></i>

                        </div>
                        <div class="product_price text-right">35000F<span>CFA</span></div>
                      </div>
                    </div>
                  </a>
                </div>

              </div>




            </div>

          </div>

        </div>

      </div>

    </div>
    <!-------------------------###End Of Card Filtering Carousel For Popular###--------------------->



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



  <!--------Boostrap Online link-------->
  <script src='http://imagesloaded.desandro.com/imagesloaded.pkgd.js'></script>
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
  <!----Filter Isotope--->
  <script src="isotope.min.js"></script>
  <script src="./javascript_link/filter.js"></script>
</body>

</html>