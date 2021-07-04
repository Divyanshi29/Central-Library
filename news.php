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
	<div class="hedding">Add News</div>
	<div class="form">
		<form method="post" action="#">
			<table border="1">
				<tr>
					<td>Enter News Text</td>
					<td><textarea name="news" required placeholder="Enter News..." minlength="10" maxlength="200"></textarea></td>
				</tr>
				<tr>
					<td width="250" valign="top"><br>Show News</td>
					<td><select name="status">
						<option value="YES">YES</option>
						<option value="NO">NO</option>
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
	<div class="hedding">News List</div>
	<div class="form">
		<table border="1">
			<tr class="tr">
				<td width="100">Sl. No</td>
				<td>News</td>
				<td width="100" align="center">Date</td>
				<td width="100" align="center">News To</td>
				<td width="150" align="center">Action</td>
			</tr>
			<?php
				$res=$con->query("select * from news where deleted='' order by(nid) desc");
				$i=1;
				while($row=mysqli_fetch_array($res))
				{ $id=$row['nid'];
					echo "<tr>";
						echo "<td>".$i++."</td>";
						echo "<td>".$row['news']."</td>";
						echo "<td align='center'>".$row['date']."</td>";
						echo "<td align='center'>".$row['nto']."</td>";
						echo "<td align='center'><a href='delete.php?id=".$id."&&tname=news'>Delete</a></td>";
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
	include('comman/connect.php');
    $mail=1;
	$date=date('d-M-Y');
	$sql="insert into news values(default,'$news','$status','$date','$mail','','$sesuser')";
	$con->query($sql);
	mysqli_close($con);
	//header("location:news.php");
?>

<script type="text/javascript">
	count="Add News Successfully ";
	//alert('value='+count);

	document.getElementById('msg').innerHTML=count;
	msg.style.padding = "20px";
	msg.style.color = "white";
	msg.style.background = "green";
	msg.style.margin = "0px 0px 10px 0px";

</script>

<?php } ?>