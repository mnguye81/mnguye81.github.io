<?php
   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email_to= "mandalynn3579@gmail.com";
      $message = $_POST['message'];
      $email_subject = "New Message from Contact Form";
      $body = "Name : $nameEmail: $email$message";
      mail($to,$subject,$body);
      echo "Thank you for your message!";
   }
?>