<?php 
//$con_count=mysqli_num_rows($con->query("select * from contact where status=''"))

?>
<div class="top">
	<div class="topmain">
		<div class="logo">
			<img src="image/logo.png" height="70" width="60" style="background-color: #1f4580; margin: 10px;">
		</div>
		<div class="menu">
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
				<li><a href="">Assignment <i class="fa fa-angle-down"></i></a>
					<ul>
						<li><a href="assignmentadd.php">Add Assignment</a></li>
						<li><a href="assignmentshow.php">Show Assignment</a></li>
					</ul>
				</li>
				<li><a href="">Library Team <i class="fa fa-angle-down"></i></a>
					<ul>
						<li><a href="batchcreate.php">Create Batch</a></li>
						<li><a href="batchshow.php">Show Batch</a></li>
					</ul>
				</li>
				<li><a href="home.php">Home</a></li>
			</ul>
		</div>
	</div>
</div>