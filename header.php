<nav id="navigation-view">
  <label for="btn" class="iconic">
    <span id="nav-btn" class="iconic fa fa-bars"></span>
  </label>
  <input class="false-input" type="checkbox" name="" id="btn">
  <ul id="contain123">
    <li class="ills">
      <label for="btn-1" id="crossover" class="show why">Category<span class="create_first" id="down_1">></span></label>
      <a class="why" href="">Category<i class="fas fa-caret-down"></i></a>
      <input class="false-input" type="checkbox" name="" id="btn-1">
      <ul class="feat-show">
        <li class="alone"><a style="color: rgb(0, 157, 255);" href="#">Most Popular</a></li>
        <li><a class="playstation" href="playstation.php">PlayStation</a></li>
        <li><a href="xbox.php">Xbox</a></li>
        <li><a href="nintendo.php">Nintendo</a></li>
        <li><a href="items.php">Computer & Accessory</a></li>
        <li><a href="consoles.php">Consoles</a></li>

      </ul>
    </li class="ills">
    <li class="ills"><a class="why" href="index.php">Gaming</a></li>
    <li class="ills"><a class="why" href="repaire.php">Fixing</a></li>
    <!-----<li class="ills"><a class="why" href="">Video-Games</a></li>----->
    <li class="ills"><a class="why" style="color: rgb(234, 168, 0);" href="popular.php">Popular</a></li>
    <li class="ills"><a class="why" href="cart.php"><i style="font-size: 17px;" class="fas fa-shopping-cart"></i> Cart
        <?php
          if(isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span></a></li>";
          }else{
            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span></a></li>";  
          }
        ?>
  </ul>
</nav>
<div class="inner_nav">
  <ul>
    <li class="become">Gamers News</li>
    <li class="hello"><?php
      if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['verified']);
        header('location: index.php');
        exit();
      }
      if(isset($_SESSION['username'])){
        $name = $_SESSION['username'];
        
        echo "
          <li class=\"hello\"><a class=\"login-button\" href=\"#\">Hello, $name</a>
          <ul id=\"sign_container\">
            <li><a href=\"index.php?logout=1\">Logout</a></li>
            <li><a href=\"\">Forgot Password ?</a></li>
            <li><a href=\"new_password.php\">Change Password</a></li>
          </ul>
        </li>
        ";
      }
      else{
        echo "<a href=\"registration.php\">Hello, Sign in <i> <img class=\"user_icon\" src=\"./pictures/user-256.png\" alt=\"\"></i></a>";
      }
    ?>
    </li>
  </ul>
</div>