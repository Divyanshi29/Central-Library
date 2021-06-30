<?php 
//$con_count=mysqli_num_rows($con->query("select * from contact where status=''"))

?>
<!DOCTYPE html>
<html>
<head>
	<title>:: NIT jsr</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<!-------------------------------------------------------------------------------------------------->

<div class="top">
	<div class="topmain">
		<div class="logo">
			<img src="image/logo.png" height="70" width="60" style="background-color: #1f4580; margin: 10px;">
		</div>
		<div class="menu" style="font-size:0.837rem;font-weight:bold;">
			<ul>
				<li class="account"><img src="image/logo.png" style="background-color: #1f4580;">
					<ul>
						<li><a href="changepsw.php">Change PSW</a></li>
						<li><a href="setting.php">Setting</a></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul>
				</li>
				<li><a href="">Contact <i class="fa fa-angle-down"></i></a>
					<ul>
						<li><a href="inbox.php">Inbox</a></li>
						<li><a href="sentmail.php">Sent Mail</a></li>
					</ul>
				</li>
				<li><a href="">User <i class="fa fa-angle-down"></i></a>
					<ul>
						<li><a href="subscribe.php">Subscribe</a></li>
						<li><a href="subscribeshow.php">Show Users</a></li>
					</ul>
				</li>
				<li><a href="">Notice <i class="fa fa-angle-down"></i></a>
					<ul>
						<li><a href="news.php">News</a></li>
						<li><a href="message.php">Message</a></li>
					</ul>
				</li>
				<li><a href="">Gallery <i class="fa fa-angle-down"></i></a>
					<ul>
						<li><a href="galleryadd.php">Add Gallery</a></li>
						<li><a href="galleryshow.php">Show Gallery</a></li>
					</ul>
				</li>
				<li><a href="">Services <i class="fa fa-angle-down"></i></a>
					<ul>
						<li><a href="galleryadd.php">Feedback</a></li>
						<li><a href="galleryshow.php">Recommend a book</a></li>
					</ul>
				</li>
				<li><a href="">Resources <i class="fa fa-angle-down"></i></a>
					<ul>
						<li><a href="galleryadd.php">E-textbooks</a></li>
						<li><a href="galleryshow.php">Online Journals</a></li>
						<li><a href="galleryshow.php">Magzines</a></li>
					</ul>
				</li>
				<li><a href="">About <i class="fa fa-angle-down"></i></a>
					<ul>
						<li><a href="galleryadd.php">Working Hour</a></li>
						<li><a href="galleryshow.php">Photo Gallery</a></li>
					</ul>
				</li>
				<li><a href="Admin/createbatch.php">Library Team <i class="fa fa-angle-down"></i></a>
				<ul>
						<li><a href="libcom.php">Library Committe</a></li>
						<li><a href="libstaff.php">Library Staff</a></li>
					</ul>
				</li>
				<li><a href="home.php">Home</a></li>
			</ul>
		</div>
	</div>
</div>

</body>
</html>