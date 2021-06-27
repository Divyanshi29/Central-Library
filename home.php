<?php
session_start();
$sesuser=$_SESSION['sesuser'];
if(!$sesuser)
    header("location:logout.php");

include('comman/connect.php');
$data=mysqli_fetch_array($con->query("select * from `registration` where user_id='$sesuser'"));

?>
<!DOCTYPE html>
<html>
<head>
	<title>:: BPC</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>

<?php include('comman/menu.php');?>

<div class="main">
	<div class="profile">
		<div class="profilebox">
			<div class="pic">
				<img src="images/<?php echo $data['images'];?>">
			</div>
			<div class="name"><?php echo $data['user_name'];?></div>
			<div class="address"><i class="fa fa-map-marker"></i> <?php echo $data['address'];?></div>
		</div>
		<div class="overview">
			<span>Overview</span>
			<p>
				At BPC innovation is a way of life, and technology is but an extension of the human intellect. BPC is a leading Website development and Training provider company of India catering to your entire set of corporate requirements, from concept creation to domain hosting. As the leading search engine marketing firm in India, we have the potential to add a whole new dimension to your sales paradigm. With professionals who are experts in their fields and are abreast with the latest in technology, we deal into all the major aspects of corporate information technology from customized software to Web Development, search engine optimization to search engine marketing. Being one 
			</p>
		</div>
	</div>
	<div class="container">
		<div class="box">
			<div class="one"><i class="fa fa-eye"> </i></div>
			<div class="two">
				<?php
                    $v=$con->query("select * from visiter");
                    $vv=mysqli_fetch_array($v);
                    echo $vv['visit'];
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
                   $u=$con->query("select * from account1");
                   echo $uu=mysqli_num_rows($u);
                ?>
			</div>
			<div class="three">Users</div>
			<div class="four"><b>BPC</b> Students (Passed Or Going)</div>
			<div class="clear"></div>
			</a>
		</div>
		<div class="box">
			<a href="subscribeshow_yes.php">
			<div class="one"><i class="fa fa-user-plus"></i></div>
			<div class="two">
				<?php
                   $u=$con->query("select * from account1 where status='YES'");
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
				<td><?php echo $data['gender'];?></td>
			</tr>
			<tr>
				<td>Father's Name</td>
			<!--	<td><?php echo $data['father_name'];?></td> -->
			</tr>
			<tr>
				<td>DOB</td>
				<td><?php echo $data['dob'];?></td>
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