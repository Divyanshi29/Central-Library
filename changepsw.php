<?php 
include('comman/connect.php');
include('include/main.php');
include('include/header.php');
if(isset($_SESSION['user'])){
    $user_ses=$_SESSION['user'];
}
else
{
    echo"<script>window.location.href='SignIn.php';</script>";	
}
?>

<style type="text/css">
	#dvPreview img
	{
	width: 180px;
	height: 180px;
	border-radius: 100%;
	}
	#page_head
	{
	min-height: 80px;
	background: #fff; /* For browsers that do not support gradients */
	background: -webkit-radial-gradient(circle, #ddd,#f5f5f5); /* Safari */
	background: -moz-radial-gradient(circle, #ddd,#f5f5f5); /* Safari */
	background: -o-radial-gradient(circle, #ddd,#f5f5f5); /* Safari */
	text-align: center;
	font-size: 1.3em;
	line-height: 80px;
	color: #444;
	font-family: 'Saira Semi Condensed', sans-serif;
	font-weight: bold;
	}
	.page_details
	{
	background: #fff;
	margin-top: 20px;
	padding:20px;
	border-radius: 4px;
	border: 1px solid #ddd;
	}
	.page_title
    {
    width: 100%;
    min-height: 60px;
    font-family: 'Saira Semi Condensed', sans-serif;
    font-size: 2.5em;
    font-weight: bold;
    color: #444;
    }    
	.backbox{margin-bottom: 30px;}
	.pic
	{
	width: 170px;
	height: 170px;
	border-radius: 100%;
	}
	.pic img
	{
	width: 170px;
	height: 170px;
	border-radius: 100%;
	}


</style>
<div id="page_head">
	<a href="index">Home</a> / Change Password
</div>

<div class="container page_details backbox">
	<div class="row">
		<div class="col-sm-6">
			<div class="page_title">Change Password</div>
			<div class="contact_form">
				<form role="form" action="#" method="post">
					<div class="form-group col-sm-10">
						<label for="name">Old Password</label>
						<input type="password" class="form-control input" name="opsw" placeholder="Enter Old Password..." required>
					</div>
					<div class="form-group col-sm-10">
						<label for="name">New Password</label>
						<input type="password" class="form-control input" name="npsw" placeholder="Enter New Password..." required>
					</div>
					<div class="form-group col-sm-10">
						<label for="name">Confirm Password</label>
						<input type="password" class="form-control input" name="cpsw" placeholder="Enter Confirm Password..." required>
					</div>
					<div class="form-group col-lg-4">
						<label for="name"></label>
						<input type="submit" class="form-control btn btn-primary input_batt" name="change" value="Change">
					</div>
					<div class="form-group col-lg-10">
						<div id="error"></div>
					</div>
				</form>
				<?php
				if(isset($_POST['change']))
				{
					extract($_POST);
					$row=mysqli_fetch_array($con->query("select * from registration where email='$user_ses'"));
					if($npsw==$cpsw)
					{ 
						$npsw=password_hash($npsw, PASSWORD_DEFAULT);
						if(password_verify($opsw, $row['Password']))
						{
							$sql="update registration set password='$npsw' where email='$user_ses'";
							$con->query($sql);
							?>
							<script type="text/javascript">
								document.getElementById('error').innerHTML="Password Updated";
								error.style.padding = "20px";
								error.style.color = "red";
								error.style.border = "1px solid red";
							</script>
						<?php }
						else
						{?>
						<script type="text/javascript">
							document.getElementById('error').innerHTML="Old Password Not Match";
							error.style.padding = "20px";
							error.style.color = "red";
							error.style.border = "1px solid red";
						</script>
					<?php }
					}
					else
					{?>
						<script type="text/javascript">
							document.getElementById('error').innerHTML="New and Confirm Password Not Match";
							error.style.padding = "20px";
							error.style.color = "red";
							error.style.border = "1px solid red";
						</script>
					<?php }
					
    				
				}
				?>
			</div>
		</div>
		<div class="col-sm-6">
			
		</div>
	</div>
</div>



<?php
 include("include/footerstrip.php");
?>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

