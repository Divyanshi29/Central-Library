<?php
session_start();
$sesuser=$_SESSION['sesuser'];
if(!$sesuser)
    header("location:logout.php");

include('comman/connect.php');
$data=mysqli_fetch_array($con->query("select * from registration where email='$sesuser'"));

// user Account
$id=$_REQUEST['id'];
$row=mysqli_fetch_array($con->query("select * from registration where userid='$id'"));
if($row['Gender']=="M")
{
	if(!$row['image'])
		$upic="profile_mm.jpg";
	else
		$upic=$row['image'];
}
else
{
	if(!$row['image'])
		$upic="profile_f.jpg";
	else
		$upic=$row['image'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>:: Admin NIT jsr</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.back
		{
			width: 200px;
			height: 40px;
			display: block;
			background: green;
			color: #FFF;
			text-decoration: none;
			line-height: 40px;
			text-align:center;
			border-radius: 4px;
			margin: auto;
			margin-top: 20px;
		}
	</style>
</head>
<body>

<?php include('comman/menu.php');?>

<div class="main">
	<div class="profile">
		<div class="profilebox">
			<div class="pic">
				<img src="user/<?php echo $upic;?>">
			</div>
			<div class="name"><?php echo $row['Name'];?></div>
			<div class="address"><i class="fa fa-map-marker"></i> <?php echo $row['Email'];?></div>
		</div>
		<div class="overview">
			<span>Overview</span>
			<p>
				<!--<?php echo $row['overview'];?>-->
			</p>
		</div>
	</div>
	<div class="container">
		<div class="box">
			<div class="one"><i class="fa fa-paper-plane"></i></div>
			<div class="three">Status</div>
			<div class="two"><?php echo $row['Type'];?></div>
			<div class="four"></div>
		</div>
		<div class="box">
			<span>Login History</span>
		</div>
		
	</div>
	<div class="profile" style="margin-top: 20px;">
		<span>Details</span>
		<table class="table">
			<tr>
				<td width="250">Gender</td>
				<td><?php echo $row['Gender'];?></td>
			</tr>
			<tr>
				<td>Reg. No.</td>
				<td><?php echo $row['Regno'];?></td>
			</tr>
			<tr>
				<td>Branch</td>
				<td><?php echo $row['Branch'];?></td>
			</tr>
			<tr>
				<td>Year</td>
				<td><?php echo substr($row['Regno'],0,4)?></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><?php echo $row['MobileNo'];?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $row['Email'];?></td>
			</tr>
		</table>

		<a href="showusers.php" class="back">Go Back</a>
	</div>
	<div class="clear"></div>
</div>

<?php include('comman/footer.php');?>
</body>
</html>