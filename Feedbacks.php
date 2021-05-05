
<!--=========================================Feed-back Form============================================================-->
<?php
include("include/main.php");
include("include/header.php");
?>
 <link rel="stylesheet" href="css/Stylesheet.css">
<br><br><br>
	<div id="form">	

		<div class="col-md-12" id ="mainform">
			<div class="col-sm-6">
			   <h2  class="contact-us" style="font-size:72px; color:#000;"><strong style="font-size:5cm; color:#555;">F</strong>eedback.</h2>
			</div>
			<div class="col-sm-6" >
				<form method="POST">
				<label><h4>Name:</h4> </label><input type="text" name="name" size="20"  class=" form-control" placeholder="User name" required />
				<label><h4>Email:</h4></label> <input type="email" name="email" size="20"  class=" form-control" placeholder="User Email" required/>
				<h4>Comments:</h4><textarea class="form-control" rows="6"  placeholder="Message" required></textarea>
				<br>
				<input type="submit" class="btn btn-info" id="btn" style="text-shadow:0 0 3px #000000; font-size:24px;"></button>
				<form>
			</div>
		</div>
	</div>


</div>
	