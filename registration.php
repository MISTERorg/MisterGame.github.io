<?php require_once 'controllers/authController.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SignUp-Registration</title>
  <link rel="stylesheet" href="./css/all.css">
  <link rel="stylesheet" type="text/css" href="./games_style/sign_in.css" />

  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>


  <link rel="stylesheet" type="text/css" href="css copy/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/simple-line-icons.css" />
  <link rel="stylesheet" type="text/css" href="css/animate.css" />

  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
  <link rel="stylesheet" type="text/css" href="css/owl.theme.css" />
  <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
  <!-------------------Boostrap Online------------>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

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
  <div class="all-background" style="background-image: url(./Homepics/background.jpg);">
    <!------lets get to the body------>
    <div class="page-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-4 form-div">
            <form action="registration.php" method="POST">
              <h4 class="text-center">Register</h4>
              <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                  <?php foreach ($errors as $error): ?>
                  <li><?php echo $error; ?></li>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
              <div class="form-group">
                <div class="client-name">
                  <div class="text">Display Name *</div>
                  <input class="form-control" value="<?php echo $username;?>" type="text" placeholder="Avatar Name"
                    name="username">
                </div>
              </div>
              <div class="form-group">
                <div class="client-name">
                  <div class="text">email *</div>
                  <input class="form-control" value="<?php echo $email;?>" type="email" placeholder="Email"
                    name="email">
                </div>
              </div>
              <div class="form-group">
                <div class="client-name">
                  <div class="text">Password *</div>
                  <input class="form-control" type="password" placeholder="Password" name="password">
                </div>
              </div>
              <div class="form-group">
                <div class="client-name">
                  <div class="text">Comfirm Password *</div>
                  <input class="form-control" type="password" placeholder="Confirm Password" name="passwordConf">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block " name="signup-btn">Sign Up</button>
              </div>
              <p class="text-center">Already a Member? <a href="login.php">Sign In</a></p>
            </form>
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