<?php
session_start();
$sesuser=$_SESSION['sesuser'];
if(!$sesuser)
    header("location:logout.php");

include('comman/connect.php');
$sql="select * from registration where email='$sesuser'";
$result = mysqli_query($con,$sql);
$data=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>:: Admin NIT jsr</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

</head>
<body>
<?php include('comman/menu.php');?>
<div class="main">
	<div class="profile">
		<div class="profilebox">
			<div class="pic">
				<img src="images/">
			</div>
			<div class="name"><?php echo $data['Name'];?></div>
			<div class="address"><i class="fa fa-map-marker"></i> <?php echo $data['Email'];?></div>
		</div>
		<div class="overview">
			<span>Overview</span>
			<p>
				National Institute of Technology, Jamshedpur takes extreme pride in the fact that it has been occupying a unique position in imparting technological education to Indian youth. Since its inception, the institute has had a vision to provide quality technical education and to facilitate scientific and technological research, coupled with a mission to develop human potential to its zenith.
			</p>
		</div>
	</div>
	<div class="container">
		<div class="box">
			<div class="one"><i class="fa fa-eye"> </i></div>
			<div class="two">
				<?php
                    $v="select * from visiter";
                    $vv=mysqli_fetch_array(mysqli_query($con,$v));
                    echo $vv['vcount'];
                ?>
			</div>
			<div class="three">Visitors</div>
			<div class="four">This is Visitors Counter</div>
			<div class="clear"></div>
		</div>
		<div class="box">
			<a href="subscribeshow.php">
			<div class="one"><i class="fa fa-user-plus"></i></div>
			<div class="two">
				<?php

                   $u=$con->query("select * from registration");
                   echo $uu=mysqli_num_rows($u);
                ?>
			</div>
			<div class="three">Users</div>
			<div class="four"><b>Nit Jsr</b> Students (Passed Or Going)</div>
			<div class="clear"></div>
			</a>
		</div>
		<div class="box">
			<a href="subscribeshow_yes.php">
			<div class="one"><i class="fa fa-user-plus"></i></div>
			<div class="two">
				<?php
                   $u=$con->query("select * from registration ");
                   echo $uu=mysqli_num_rows($u);
                ?>
			</div>
			<div class="three">Users</div>
			<div class="four"><b>Profile</b> Completed</div>
			<div class="clear"></div>
			</a>
		</div>
		<div class="box">
			<a href="news.php">
			<div class="one"><i class="fa fa-file-audio-o"></i></div>
			<div class="two">
				<?php
                   $n=$con->query("select * from news");
                   echo $ns=mysqli_num_rows($n);
                ?>
			</div>
			<div class="three">News</div>
			<div class="four">Currnet News Counter</div>
			<div class="clear"></div>
			</a>
		</div>
	</div>
	<div class="profile" style="margin-top: 20px;">
		<span>Details</span>
		<table class="table">
			<tr>
				<td width="250">Gender</td>
				<!--<td><?php echo $data['gender'];?></td>-->
			</tr>
			<tr>
				<td>Father's Name</td>
			<!--	<td><?php echo $data['father_name'];?></td> -->
			</tr>
			<tr>
				<td>DOB</td>
			<!--	<td><?php echo $data['dob'];?></td>-->
			</tr>
			<tr>
				<td>DOJ</td>
			<!--	<td><?php echo $data['doj'];?></td>-->
			</tr>
		</table>
	</div>
	<div class="clear"></div>
</div>

<?php include('comman/footer.php');?>
</body>
</html>