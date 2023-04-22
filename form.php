<?php

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];


  $email_form = 'eladdaudet1918@gmail.com';
  $email_subject = "New Form Submission";
  $email_body = "User Name: $name.\n".
      "User Email: $visitor_email.\n".
      "Here is the from the message from the Gaming Website that you created: $message.\n";



  $to = "eladdaudet1918@gmail.com";
  $headers = "From: $email_form \r\n";
  $headers = "Reply-To: $visitor_email \r\n";
    
  mail($to,$email_subject,$email_body,$headers);

  header("Location: ");
    
?>