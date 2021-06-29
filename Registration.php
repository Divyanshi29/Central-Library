<?php require('comman/connect.php'); ?>

<?php
include('include/main.php');
include('include/header.php');
?>



<?php  
// define variables to empty values  
$nameErr = $branchErr = $typeErr = $passSameErr =  $passErr = $otpErr =  $regError="";  

   
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
//String Validation  
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
    //Email Validation   
    // if (empty($_POST["email"])) {  
    //         $emailErr = "Email is required";  
    // } else {  
    //         $email = input_data($_POST["email"]);  
    //         // check that the e-mail address is well-formed  
    //         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
    //             $emailErr = "Invalid email format";  
    //         }  
    //  }  
      
       
      if (empty ($_POST["type"])) {  
              $typeErr = "User is required";  
      } else {  
              $type = ($_POST["type"]);  
      }  

       if (empty ($_POST["branch"])) {  
              $branchErr = "Branch is required";  
      } else {  
              $branch = ($_POST["branch"]);  
      }
      
      
    
      
    //Password and Confirm Password equal or not
    if($_POST['password'] == $_POST['cpassword'])
    {
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];
      $password = password_hash($password, PASSWORD_DEFAULT);
      $cpassword = $password;
       
    }
    else
    {
      $passSameErr = "Password and Confirm Password Not same";
    }

    $regno = $_POST['regno'];
    $email = $_POST['email'];
    
	}

  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
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

  <head> 
  <script>
   var a = localStorage.getItem("Email");
   function myFunction(){
        document.getElementById('emailid').value = a;
   } 
   </script>

   
     </head>
   <body onload="myFunction()">
  <form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div style="text-align: center; text-size:18px;color: rgb(25, 33, 99);">
       <h3>User Registration Form</h3>
   </div>
  	<div class="input-group">
  	  <label>Name<span class= "error">* <?php echo $nameErr; ?> </span> </label> 
  	  <input type="text" name="name" placeholder="Enter Name Here" required minlength="3">
     
  	</div>
  	<div class="input-group">
  	  <label>Email</label>   
  	  <input type="email" name="email" id="emailid"  readonly>
    </div>
  	<div class="input-group">
  	  <label>Password<span class="error">* <?php echo $passErr; ?></label>
  	  <input type="password" name="password" placeholder="Enter Password Here"  minlength="8" required>
      
  	</div>
  	<div class="input-group">
  	  <label>Confirm  <span class="error">* <?php echo $passSameErr; ?> </span> </label>
      
  	  <input type="password" name="cpassword" placeholder="Enter Confirm Password Here"  minlength="8" required>
       
  	</div>
    <div class="input-group">
  	 <label for="type">User<span class="error">* <?php echo $typeErr; ?> </span> </label>
      
            <select name="type" required >
                <option value="none" selected disabled hidden>Select an Option</option>
                <option value="teacher">Faculty</option>
                <option value="student">Student</option>
            </select>
      
  	</div>
    <div class="input-group">
  	  <label>Registration Number<span class="error">* <?php echo $regError; ?></label>
  	  <input type="text" name="regno" placeholder="Enter Registration Number Here" >
  	</div>
    <div class="input-group">
      
  	   <label for="branch">Branch<span class="error">* <?php echo $branchErr; ?> </span>  </label>
       
            <select  name="branch" >
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
  	  <button type="submit" class="btn" name="register" style="float: left;">Register</button>
      <p style="float: left; margin: 30px 0 0 20px;">
        Already a member? <a href="SignIn.php">Sign in</a>
      </p>
  	</div>
  </form>
  </body>
  <?php

if(isset($_POST['register']))
{
    if($nameErr == ""&& $branchErr ==""&& $typeErr ==""&& $passSameErr == "" && $otpErr=="")
    {
    
        //$email = $_GET['data'];
        //echo $email;
        $query1 = "SELECT * FROM `registration` WHERE `Email` = '$email'";
        $result1 = mysqli_query($con,$query1);
        if($result1->num_rows==0){
          $query = "INSERT INTO `registration` (`UserId`, `Name`, `Email`, `Password`, `Confirmpassword`, `Type`, `Branch`, `Regno`) VALUES (default,'$name','$email','$password','$cpassword','$type','$branch','$regno')";
          $result = mysqli_query($con,$query);
          echo "<script>alert('Registration Successful')</script>";
          echo '<script language="javascript">window.location="SignIn.php";</script>';
        }
        else
        {
          echo "<script>alert('This Email Id already exists')</script>";
            echo '<script language="javascript">window.location="SignIn.php";</script>';
        }

        
    }
    else {  
          echo "<script>alert('You didn't filled up the form correctly.')</script>";  
        } 
}   
?>
  <?php
  include("include/footerstrip.php");?>
  
     


