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
	<div class="hedding">Add User</div>
	<div class="form">
		<div id="error"></div>
		<form method="post" action="#">
			<table border="1">
				<tr>
					<td>Student Name</td>
					<td><input type="text" name="name" required minlength="2" value="<?php echo $row['Name'];?>"></td>
					<td>Gender</td>
					<td><select name="gender" required>
						<option value="">Select Gender...</option>
						<option value="M" <?php if($row['Gender']=='M') echo "selected";?>>Male</option>
						<option value="F" <?php if($row['Gender']=='F') echo "selected";?>>Female</option>
					</select></td>
				</tr>
				<tr>
					<td>Reg. No.</td>
					<td><input type="text" name="mname" required minlength="2" value="<?php echo $row['Regno'];?>"></td>
					<td>Mobile</td>
					<td><input type="text" name="mobile" required minlength="10" maxlength="10" value="<?php echo $row['MobileNo'];?>"></td>
				</tr>
				<tr style="background: #DDD;">
					<td>Email</td>
					<td><input type="email" name="email" required minlength="2" value="<?php echo $row['Email'];?>"></td>
					<td>Password</td>
					<td><input type="text" name="password" style="cursor: not-allowed;" value="<?php echo $row['Password'];?>"></td>
				</tr>
				<tr>
					<td>Branch</td>
					<td><select name="Branch" required>
							<option value="">Select Branch..</option>
							<option value="BCA" <?php if($row['Branch']=='BCA') echo "selected";?>>BCA</option>
							<option value="BSc IT" <?php if($row['Branch']=='Bsc IT') echo "selected";?>>BSc IT</option>
							<option value="BTech" <?php if($row['Branch']=='BTech') echo "selected";?>>BTech</option>
							<option value="BE" <?php if($row['Branch']=='BE') echo "selected";?>>BE</option>
							<option value="MCA" <?php if($row['Branch']=='MCA') echo "selected";?>>MCA</option>
							<option value="MSc IT" <?php if($row['Branch']=='MSc IT') echo "selected";?>>MSc IT</option>
							<option value="MTech" <?php if($row['Branch']=='MTech') echo "selected";?>>MTech</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>From Year</td>
					<td><select class="form-control input" name="fromyear" required>
							<option value="">Select Year..</option>
							<?php 
								for ($i=2012; $i <=2030 ; $i++) { ?>
									<option value='<?php echo $i;?>' <?php if(substr($row['Regno'],0,4)==$i) echo "selected";?>><?php echo $i;?></option>
								<?php }
							?>
						</select>
					</td>
					<td>To Year</td>
					<td><select class="form-control input" name="toyear" required>
							<option value="">Select Year..</option>
							<?php 
								for ($i=2012; $i <=2030 ; $i++) { ?>
									<option value='<?php echo $i;?>' <?php if(substr($row['Regno'],0,4)==$i) echo "selected";?>><?php echo $i;?></option>";
								<?php }
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Overview</td>
					<td colspan="3"><textarea name="overview" style="width: 820px; height: 100px;"><?php ?></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><input type="submit" name="save" value="Save"></td>
				</tr>
			</table>
		</form>
	</div>
</div><br>

<?php include('comman/footer.php');?>
</body>
</html>

<?php
if(isset($_POST['save']))
{
	extract($_POST);
	include('comman/connect.php');
	$sql="update account1 set name='$name',fname='$fname',mname='$mname',dob='$dob',gender='$gender',mobile='$mobile',email='$email',password='$password',college_name='$college_name',course='$course',toyear='$toyear',fromyear='$fromyear',address='$address',city='$city',state='$state',overview='$overview' where ac_id='$id'";
	$con->query($sql);
	mysql_close($con);
	//header("location:subscriberedit.php?id=$id");
	echo"<script>window.location.href='subscriberedit.php?id=".$id."';</script>";
}
?>