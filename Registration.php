<?php require('Admin/comman/connect.php'); ?>

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
  margin: 10px 0px 10px 80px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 120%;
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
    width:260px;
    height:30px;
    border-radius: 5px;
    border: 1px solid gray;
}
    </style>






  <form method="post" action="validate.php">
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="cpassword">
  	</div>
    <div class="input-group">
  	 <label for="type">User</label>
            <select name="type" >
                <option value="none" selected disabled hidden>Select an Option</option>
                <option value="teacher">Faculty</option>
                <option value="student">Student</option>
            </select>
  	</div>
    <div class="input-group">
  	  <label>Registration Number</label>
  	  <input type="text" name="regno">
  	</div>
    <div class="input-group">
  	   <label for="branch">Branch</label>
            <select  name="branch">
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
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="SignIn.php">Sign in</a>
  	</p>
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

