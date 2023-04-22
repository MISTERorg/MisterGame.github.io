<?php

  session_start();

  require 'config/db.php';

  $errors = array();
  $username = "";
  $email = "";



  //if user clicks on the sign up button
  if(isset($_POST['signup-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    //validation
    if(empty($username)){
      $errors['username'] = "UserName Required";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL )){
      $errors['email'] = "Email Address is invalid";
    }
    if(empty($email)){
      $errors['email'] = "Email Required";
    }
    if(empty($password)){
      $errors['password'] = "Password Required";
    }
    if($password !== $passwordConf){
      $errors['password'] = "The Two Password do not match";
    }

    
    $emailQuery = "SELECT * FROM user_registration WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if($userCount > 0){
      $errors['email'] = "Email Already Exists";
    }

    /*---
    $emailexist= "SELECT * FROM user_registration WHERE email = '$email'";
    $res = mysqli_query($conn, $emailexist);

    if(mysqli_nums_rows($res)>0){
      $errors['email'] = "Email Already Exist";
    }
    -*/


    if(count($errors) === 0){
      $password = password_hash($password, PASSWORD_DEFAULT);
      $token = bin2hex(random_bytes(50));
      $verified = false;

      $sql = "INSERT INTO user_registration (username, email, verified, token, password) VALUES (?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ssbss', $username, $email, $verified, $token, $password);

      if($stmt->execute()){
        //login user
        $user_id = $conn->insert_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['username'] = $username;
        $_SESSION ['email'] = $email;
        $_SESSION['verified'] = $verified;


        //flash message
        $_SESSION['message'] = "You are now logged in!";
        $_SESSION['alert-class'] = "alert-success";
        header('location: sucess-login.php');
        exit();
      }
      else{
        $errors['db_error'] = "Database error: failed to register"; 
        printf("Error: %s\n", $stmt->error);
      }

    }

  

    /*---if(empty($errors)){
      //register new user
      $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

      require 'config/db.php';

      //make a query
      $sql = "INSERT INTO user_registration(id, username, email, verified, password)";
      $verified = false;
      $sql.= "VALUES ('', ?, ?, ?, ?)";

      //initialise stmt
      $q = mysqli_stmt_init($conn);

      //prepare stmt
      mysqli_stmt_prepare($q, $sql);

      //bind values
      mysqli_stmt_bind_param($q, 'ssbs', $username, $email, $verified, $hashed_pass);

      //execute stmt
      mysqli_stmt_execute($q);

      $emailQuery = "SELECT * FROM user_registration WHERE email=? LIMIT 1";
      $stmt = $conn->prepare($emailQuery);
      $stmt->bind_param('s', $email);
      $stmt->execute();
      $result = $stmt->get_result();
      $userCount = $result->num_rows;
      $stmt->close();
  
      if($userCount > 0){
        $errors['email'] = "Email Already Exists";
      }

      if(mysqli_stmt_affected_rows($q)==1){
        print "record sucessfully inserted";
      }
      else{
        print "error while registrying";
      }
    }
    else{
      echo "Not Validate";
    }---*/


    

  }
  

  //Login Part
  if(isset($_POST['login-btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    //validation
    if(empty($username)){
      $errors['username'] = "UserName Required";
    }
    if(empty($password)){
      $errors['password'] = "Password Required";
    }

    if(count($errors) === 0){
      $sql = "SELECT * FROM user_registration WHERE email=? OR username=? LIMIT 1";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ss', $username, $username);
      $stmt->execute();
      $result = $stmt->get_result();
      $user = $result->fetch_assoc();
  
      if(password_verify($password, $user['password'])){
        //login sucess
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION ['email'] = $user['email'];
        $_SESSION['verified'] = $user['verified'];
        
        //flash message
        $_SESSION['message'] = "You are now logged in!";
        $_SESSION['alert-class'] = "alert-success";
        header('location: index.php');
        exit();
      }
      else{
        $errors['login_fail'] = "Wrong Credentials";
      }
    }


  }

  //logout user
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    header('location: login.php');
    exit();
  }

  //If User Wants To Chamge Password
  if(isset($_POST['change-password'])){
    $_SESSION['message'] = "";
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];
    if(empty($password)){
      $errors['password'] = "Password Required";
    }
    if($password !== $passwordConf){
      $errors['password'] = "The Two Password do not match";
    }
    if(count($errors) === 0){
      $email = $_SESSION['email'];
      $username = $_SESSION['username'];
      $encpass = password_hash($password, PASSWORD_DEFAULT);
      $update_password = "UPDATE user_registration SET password = '$encpass' WHERE email = '$email' OR username = '$username'";
      
      $run_query = mysqli_query($conn, $update_password);

      if($run_query){
        $message = "Password Changed. Now you can Login with your new password";
        $_SESSION['alert-class'] = "alert-success";
        $_SESSION['message'] = $message;
        header('location: password_changed.php');
      }
      else{
        $errors['db-error'] = "Failed To Chnage Password";
      }
    }
  }
  //login new password
  if(isset($_POST['login-now'])){
    header('location: login.php');
  }


  //verify user by token
  /*---function verifyUser($token){
    global $conn;
    $sql = "SELECT * FROM user_registration WHERE token= '$token' LIMIT 1";
    $result = mysqli_query($conn, $result);

    if(mysqli_nums_rows($result) >0 ){
      $user = mysqli_fetch_assoc($result);
      $update_query = "UPDATE user_registration SET verified=1 WHERE token='$token'";

      if(mysqli_query($conn, $update_query)){
        //log user in
        //login sucess
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION ['email'] = $user['email'];
        $_SESSION['verified'] = 1;
                
        //flash message
        $_SESSION['message'] = "Your Email address was sucessfully verified!";
        $_SESSION['alert-class'] = "alert-success";
        header('location: index.php');
        exit();
      }
    }
    else{
      echo "User Not Found";
    }
  }----*/