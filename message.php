<?php
session_start();
$sesuser=$_SESSION['sesuser'];
if(!$sesuser)
    header("location:logout.php");

include('comman/connect.php');
$data=mysqli_fetch_array($con->query("select * from registration where email='$sesuser'"));

?>
<!DOCTYPE html>
<html>
<head>
	<title>::NIT JSR</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
</head>
<body>

<?php include('comman/menu.php');?>

<div class="main">
	<div id="msg"></div>
	<div class="hedding">Add Message</div>
	<div class="form">
		<form method="post" action="#">
			<table border="1">
				<tr>
					<td width="250" valign="top"><br>Enter Message Text</td>
					<td><textarea name="message" required placeholder="Enter Message..." minlength="10" maxlength="300" style="height: 100px; width: 700px;"></textarea></td>
				</tr>
				<tr>
					<td width="250" valign="top"><br>Message To</td>
					<td><select name="status">
						<option value="YES">YES</option>
						<option value="NO">NO</option>
						<option value="All">All</option>
					</select></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="Update" value="Update"></td>
				</tr>
			</table>
		</form>
	</div>
</div><br>

<div class="main">
	<div class="hedding">Message List</div>
	<div class="form">
		<table border="1">
			<tr class="tr">
				<td width="100">Sl. No</td>
				<td>Message</td>
				<td width="100" align="center">Date</td>
				<td width="100" align="center">Message To</td>
				<td width="150" align="center">Action</td>
			</tr>
			<?php
				$res=$con->query("select * from message where deleted='' order by(mid) desc");
				$i=1;
				while($row=mysqli_fetch_array($res))
				{ $id=$row['mid'];
					echo "<tr>";
						echo "<td>".$i++."</td>";
						echo "<td>".$row['message']."</td>";
						echo "<td align='center'>".$row['date']."</td>";
						echo "<td align='center'>".$row['mto']." (".$row['mcount'].")</td>";
						echo "<td align='center'><a href='delete.php?id=".$id."&&tname=message'>Delete</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
</div>

<?php include('comman/footer.php');?>
</body>
</html>


<?php
if(isset($_POST['Update']))
{
	extract($_POST);
	$date=date('d-M-Y');
	include('comman/connect.php');

	if($status=="All"){
		$sql="select email from account1";
		$res=$con->query($sql);
	}
	else{
		$sql="select email from account1 where status='$status'";
		$res=$con->query($sql);
	}
	
	$mail=0;
	while($row=mysqli_fetch_array($res))
	{	
		$mail++;
	}

	mysqli_query($con,"insert into message values('','$message','$date','$status','$mail','','$sesuser')");
	mysqli_close($con);

	// Mail Send Code
	$to='santoo.gaya@gmail.com';
	$subject = "BPC Message";

	$htmlContent = '
		<html>
			<head>
				<title>Welcome to BPC</title>
				<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
			</head>
			<body style="font-family:sans-serif;">
			<div style="width: 60%; border: 1px solid #ddd; background: #FFF; min-height: 200px; margin: auto;">
				<div style="border-bottom: 1px solid #DDD; padding: 0px 20px; height: 100px;">
					<a href="http://bpcgaya.com/"><img src="http://bpcgaya.com/images/logo.png"></a>
				</div>
				<div style="padding: 20px; min-height: 120px; font-size: 1.2em; color: #444;">
					'.$message.'

					<br><br><br><a href="http://bpcgaya.com/" style="padding: 10px 30px; background: #4485f2; color: #FFF; text-decoration: none; font-size: 1em; border-radius: 4px;">Visit Website</a>
				</div>
			</div>
			</body>
		</html>';

	// Set content-type header for sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// Additional headers
	$headers .= 'From: BPC Gaya<bpcgaya@gmail.com>' . "\r\n";

	// Send email	
	//mail($to,$subject,$htmlContent,$headers);
?>
<script type="text/javascript">
	count="<b><?php echo $mail?></b> Message Send Successfully Via Mail. ";
	document.getElementById('msg').innerHTML=count;
	msg.style.padding = "20px";
	msg.style.color = "white";
	msg.style.background = "green";
	msg.style.margin = "0px 0px 10px 0px";

</script>

<?php } ?>