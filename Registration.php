<?php require('Admin/comman/connect.php'); ?>

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
.input-group select
{
    width:100%;
    height:30px;
    border-radius: 5px;
    border: 1px solid gray;
}
</style>

   
  <form method="post" action="validate.php">
    <div style="text-align: center; text-size:18px;color: rgb(25, 33, 99);">
       <h3>User Registration Form</h3>
   </div>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" placeholder="Enter Name Here" required minlength="3">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="Enter Email Here" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" placeholder="Enter Password Here" required minlength="8">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="cpassword" placeholder="Enter Confirm Password Here" required minlength="8">
  	</div>
    <div class="input-group">
  	 <label for="type">User</label>
            <select name="type" required>
                <option value="none" selected disabled hidden>Select an Option</option>
                <option value="teacher">Faculty</option>
                <option value="student">Student</option>
            </select>
  	</div>
    <div class="input-group">
  	  <label>Registration Number</label>
  	  <input type="text" name="regno" placeholder="Enter Registration Number Here" required>
  	</div>
    <div class="input-group">
  	   <label for="branch">Branch</label>
            <select  name="branch" required>
                <option value="none" selected disabled hidden>Select an Option</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Computer Applications">Computer Applications</option>
                <option value="Physics">Physics</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                <option value="Metallurgical and Materials Engineering">Metallurgical and Materials Engineering</option>
                <option value="Production and Industrial Engineering">Production and Industrial Engineering</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Humanities,Social Science and Management">Humanities,Social Science and Management</option>
            </select>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user" style="float: left;">Register</button>
      <p style="float: left; margin: 30px 0 0 20px;">
        Already a member? <a href="SignIn.php">Sign in</a>
      </p>
  	</div>
  </form>
  
     
  <?php
if(isset($_POST['reg_user']))
{

    extract($_POST);
    $query = "INSERT INTO `registration` (`UserId`, `Name`, `Email`, `Password`, `Confirmpassword`, `Type`, `Branch`, `Regno`) VALUES (default,'$name','$email','$password','$cpassword','$type','$branch','$regno')";
    $result = mysqli_query($con,$query);
    echo "<script>alert('Registration Successful')</script>";
}


   include("include/footerstrip.php");
?>

