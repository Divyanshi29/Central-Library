<?php
include('include/main.php');
include('include/header.php');
?>

<style>
form, .content {
  width: 40%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
  height:490px;
}
.input-group {
    width: 80%;
  margin: 10px 0px 10px 50px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 100%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  color: #a94442; 
  margin-left:5px;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
.input-group select
{
    width:100%;
    height:30px;
    border-radius: 5px;
    border: 1px solid gray;
}

</style>
<script>
function myFunction(){
  // document.getElementById('verifyid').style.visibility = 'hidden';
  //  document.getElementById('otpid').style.visibility = 'hidden';
}
   
</script>
<body onload="myFunction()">
<form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<div class="input-group" id ="emailid">
  	  <label >Email<span class="error">*  </span></label>   
  	  <input type="email" name="email" placeholder="Enter Email Here" >
    </div>
    <div class="input-group" id="otpid">
      <input type="text" name="otp" placeholder="One Time Password">
    </div>
    <div id = "sendid" class="input-group">
      <button  class="btn"   name="send" value ="check" style="float: left;" onClick = "myFunction()">Send</button>
    </div>
    <div class="input-group" id="verifyid">
      <button  class="btn"  name="verify"  style="float: left;">Verify</button>
    </div>
</form>
</body>
<?php 
require('comman/connect.php'); 
$success = "";
$error_message = "";
if(isset($_POST['send']))
{
        $allowedDomains = array('nitjsr.ac.in');
        list($user, $domain) = explode('@', $_POST['email']);
        if (checkdnsrr($domain, 'MX') && in_array($domain, $allowedDomains))
        {
            $email = $_POST['email'];
             $otp = rand(100000,999999);
                $to = $_POST['email'];
                $sub = "This is an otp verification";
                $headers = "From:magarwal.18april@gmail.com";
                $message = "Your one time OTP is ".$otp."";
                if(mail($to,$sub,$message,$headers)){
                    $result = mysqli_query($con,"INSERT INTO otp_expiry(otp,is_expired,create_at,Email) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "','$email')");
                    $current_id = mysqli_insert_id($con);
                    echo "<script>alert('Email Sent');</script>";
                    ?>
                    <script>
                      document.getElementById('emailid').style.visibility = 'hidden';
                     document.getElementById('sendid').style.visibility = 'hidden';
                      </script>
               <?php }
            else {
               echo "<script>alert('Email Does Not Exists');</script>";
                
            }
        }
        else{
            $emailErr = "Please Use Institue Email Id Only";
            echo "<script>alert('Use Institute Email ID');</script>";
        }
       
}


if(isset($_POST['verify']))
{?>

  <?php
  $result = mysqli_query($con,"SELECT * FROM otp_expiry WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)");
	$count  = mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);
  $email = $row['Email'];
  ?>
 <script>var name='<?php echo $email; ?>'</script>;
  <?php
	if(!empty($count)) {
        $result = mysqli_query($con,"DELETE FROM `otp_expiry` WHERE otp = '" . $_POST["otp"] . "'");
		$success = 2;	
        echo '<script language="javascript">
        localStorage.setItem("Email",name);</script>';
        echo '<script language="javascript">window.location.href="Registration.php";</script>';
	} else {
		$success = 1;
		$error_message = "Invalid OTP!";
        echo "<script>alert('Otp Incorrect');</script>";
	}	
}
?>
 <?php
  include("include/footerstrip.php");?>



