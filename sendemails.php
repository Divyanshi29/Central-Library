<?php

$to = "2019PGCACA54@nitjsr.ac.in";
   $sub = "This is an otp verification";
   $headers = "From: magarwal.18april@gmail.com";
   $message = "This is the otp";
   if(mail($to,$sub,$message,$headers)){
    echo "Email Sent";
   }
  else{
    echo "Email Not sent";
  }

    ?>