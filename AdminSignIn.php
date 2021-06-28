<?php require('comman/connect.php'); ?>

<?php
include('include/main.php');
include('include/header.php');
?>
<style>
    form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  width: 100%;
  margin: 10px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 90%;
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
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
</style>
<div style = "min-height:500px;">
  <form method="post" action="#">
    <div>
      <h3 align="center">Admin Login Form</h3>
    </div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
    <div id="error"></div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="sig_user">Sign In</button>
  	</div>
  	<p style = "margin-left:70px">
        Register ? <a href="Registration.php">Sign Up</a>
  	</p>
  </form>
</div>
  <?php
if(isset($_POST['sig_user']))
{

    extract($_POST);
     $sql="select * from registration where email='$email' and password='$password'";
    $result1 = mysqli_query($con,$sql);
      if($result1->num_rows==0)
      {?>
        <script type="text/javascript">
          document.getElementById('error').innerHTML="Worng UserId and Password";
          error.style.padding = "10px";
          error.style.color = "#FFF";
          error.style.background = "red";
          error.style.border = "1px solid red";
        </script>
      <?php
      }
      else{
        session_start();
        $_SESSION['sesuser']=$email;
        echo "<script>alert('Login Successful')</script>";
        echo '<script language="javascript">window.location="home.php";</script>';
    }
}
    include("include/footerstrip.php");
?>
