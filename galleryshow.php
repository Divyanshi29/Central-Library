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

<div class="main" style="border: 0px solid #333;">
	<div class="hedding">Add Gallery Images</div>
	<div class="form">
		<?php
			include('comman/connect.php');
			$res=$con->query("select * from gallery order by(gid) desc");
			while($row=mysqli_fetch_array($res))
			{ $id=$row['gid']; $pic=$row['pic']; ?>
				<div class="galbox">
					<img src="gallery/<?php echo $pic;?>">
					<div class="gallname"><?php echo $row['name'];?></div>
					<a href="delete.php?id=<?php echo $id;?>&&tname=gallery&&pic=<?php echo $pic;?>">Delete</a>
				</div>
			<?php }
		?>
		
		<div class="clear"></div>
	</div>
</div>

<?php include('comman/footer.php');?>
</body>
</html>