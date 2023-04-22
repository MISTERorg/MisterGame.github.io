<?php

  require 'constants.php';

 

  try{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //encoded language
    mysqli_set_charset($conn, 'utf8');
  }
  catch(Exception $ex){
    print "An Exception Occured Message".$ex->getMessage();
  }
  catch (Error $e){
    print "The System is busy please try later";
  }

?>