
<!--=========================================Feed-back Form============================================================-->
<?php
include("include/main.php");
include("include/header.php");
?>
 <link rel="stylesheet" href="css/Stylesheet.css">
<br><br><br>
	<div id="form" style="margin-top:0px">	

		<div class="col-md-12" id ="mainform">
			<div class="col-sm-6">
			   <h2  class="contact-us" style="font-size:72px; color:#000;"><strong style="font-size:5cm; color:#555;">F</strong>eedback.</h2>
			</div>
			<div class="col-sm-6" >
			<?php
              include('Admin/comman/connect.php');
              $connection=mysqli_connect("localhost","root","","central_library_jsr");
              if (isset($_POST['submit'])){
              $user_name =  mysqli_real_escape_string($connection,$_POST['name']);
              $email =  mysqli_real_escape_string($connection,$_POST['email']);
              $feedback =  mysqli_real_escape_string($connection,$_POST['message']);
              $query ="INSERT into `feedback` (Name,Email,Message)values('$user_name', '$email','$feedback')";
              $result = mysqli_query($connection, $query);
              if($result){
                echo '<h4 style="color:blue;font-family: "Lucida Console", "Courier New", monospace;">Thank you for your feedback. We\'ll appreciate!</h4>';
              }else{
              //die("Please try again. ");
              echo "Error: " . mysqli_error($connection);
            }
            mysqli_close($connection);
          }
              ?>
              
				<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="post">
				<label><h4>Name:</h4> </label><input type="text" name="name" size="20"  class=" form-control" placeholder="User name" required />
				<label><h4>Email:</h4></label> <input type="email" name="email" size="20"  class=" form-control" placeholder="User Email" required/>
				<h4>Comments:</h4><textarea class="form-control" rows="6" name="message" placeholder="Message" required></textarea>
				<br>
				<input type="submit" name="submit" class="btn btn-info" id="btn" style="text-shadow:0 0 3px #000000; font-size:24px;"></button>
				<form>
			</div>
		</div>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="footer" style="background-color:#090832;text-align:center;height:50px;padding:15px 0px 0px 0px;color:white;
  bottom: 0;
  width: 100%;">
Copyright © 2021 Central Library, <a href="http://nitjsr.ac.in/" style="color:grey;"> National Institute of Technology Jamshedpur</a> Adityapur | Made By MCA 

</div>