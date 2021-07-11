<?php
session_start();
$sesuser=$_SESSION['sesuser'];
if(!$sesuser)
    header("location:logout.php");

include('comman/connect.php');
$data=mysqli_fetch_array($con->query("select * from registration where email='$sesuser'"));

?>
<!DOCTYPE html>
<html>
<head>
  <title>::NIT JSR</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
</head>
<body>

<?php include('comman/menu.php');?>

<div class="main">
  <div id="msg"></div>
  <div class="hedding">Add News</div>
  <div class="form">
    <form method="post" action="#">
      <table border="1">
        <tr>
          <td width="200">Enter Name</td>
          <td><input style="width:90%;" type="text" name="name" required placeholder="Enter Name..." minlength="3" maxlength="200"></td>
        </tr>
        <tr>
          <td>Enter Email</td>
          <td><input style="width:90%;" type="email" name="email" required placeholder="Enter Email..." minlength="5" maxlength="200"></td>
        </tr>
        <tr>
          <td>Enter Mobile No</td>
          <td><input style="width:90%;" type="text" name="mobile" required placeholder="Enter Mobile No..." minlength="10" maxlength="10"></td>
        </tr>
        <tr>
          <td>Enter Password</td>
          <td><input style="width:90%;" type="password" name="password1" required placeholder="Enter Password..." minlength="4" maxlength="20"></td>
        </tr>
        <tr>
          <td>Enter Confirm Password</td>
          <td><input style="width:90%;" type="password" name="password2" required placeholder="Enter Confirm Password..." minlength="4" maxlength="20"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="signup" value="Sign Up"></td>
        </tr>
      </table>
    </form>
  </div>
</div><br>


<?php include('comman/footer.php');?>
</body>
</html>

<?php
if(isset($_POST['signup']))
{
  extract($_POST);
  include('comman/connect.php');

  $query1 = "SELECT * FROM `registration` WHERE `Email` = '$email'";
  $result1 = mysqli_query($con,$query1);
  if($result1->num_rows==0){
      if($password1!=$password2){
        ?>

          <script type="text/javascript">
          document.getElementById('msg').innerHTML="Password and Confirm Password not match";
          msg.style.padding = "20px";
          msg.style.color = "white";
          msg.style.background = "red";
          msg.style.margin = "0px 0px 10px 0px";

          </script>
          <?php
      }
      else{
        $password1 = password_hash($password1, PASSWORD_DEFAULT);
        $password2 = password_hash($password2, PASSWORD_DEFAULT);
          $sql="insert into registration values(default,'$name','$email','$mobile','','$password1','$password2','Admin','','','')";
          $con->query($sql);
          mysqli_close($con);
          echo "<script>alert('Registration Successful')</script>";
          echo '<script language="javascript">window.location="SignIn.php";</script>';
          ?>
          <script type="text/javascript">
          document.getElementById('msg').innerHTML="Register Admin Successfully";
          msg.style.padding = "20px";
          msg.style.color = "white";
          msg.style.background = "green";
          msg.style.margin = "0px 0px 10px 0px";

          </script>
          <?php
      }
  }
  else{
    ?>
    <script type="text/javascript">
  document.getElementById('msg').innerHTML="Your email already exist";
  msg.style.padding = "20px";
  msg.style.color = "white";
  msg.style.background = "red";
  msg.style.margin = "0px 0px 10px 0px";

   </script>
   <?php
  }
  //header("location:news.php");
 } ?>