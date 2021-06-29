<?php

if(isset($_POST['check']))
{
  $rndno=rand(100000, 999999);//OTP generate
   $to = $_POST['email'];
   $sub = "This is an otp verification";
   $headers = "From:magarwal.18april@gmail.com";
   $message = "This is the otp".$rndno."";
   echo "<script>console.log($to)</script>";
   if(mail($to,$sub,$message,$headers)){
     echo "<script> alert('Email Sent')</script>";
     
    
   }
  else{
    echo "<script> alert('Email  Not Sent')</script>";
  }
}
if(isset($_POST['verify']))
{
     if($_POST['otp']==$rndno)
     {
       echo "Email Verfied";
     }
     else
     {
       echo "Otp is wrong";
     }
}

?>

