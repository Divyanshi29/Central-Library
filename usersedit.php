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
					<td><input type="text" name="regno" required minlength="2" value="<?php echo $row['Regno'];?>"></td>
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
                <option value="Chemistry" <?php if($row['Branch']=='Chemistry') echo "selected";?>>Chemistry</option>
                <option value="Civil Engineering" <?php if($row['Branch']=='Civil Engineering') echo "selected";?>>Civil Engineering</option>
                <option value="Computer Applications" <?php if($row['Branch']=='Computer Applications') echo "selected";?>>Computer Applications</option>
                <option value="Physics" <?php if($row['Branch']=='Physics') echo "selected";?>>Physics</option>
                <option value="Electrical Engineering" <?php if($row['Branch']=='Electrical Engineering') echo "selected";?>>Electrical Engineering</option>
                <option value="Electronics and Communication Engineering" <?php if($row['Branch']=='Electronics and Communication Engineering') echo "selected";?>>Electronics and Communication Engineering</option>
                <option value="Computer Science and Engineering" <?php if($row['Branch']=='Computer Science and Engineering') echo "selected";?>>Computer Science and Engineering</option>
                <option value="Metallurgical and Materials Engineering" <?php if($row['Branch']=='Metallurgical and Materials Engineering') echo "selected";?>>Metallurgical and Materials Engineering</option>
                <option value="Production and Industrial Engineering" <?php if($row['Branch']=='Production and Industrial Engineering') echo "selected";?>>Production and Industrial Engineering</option>
                <option value="Mathematics" <?php if($row['Branch']=='Mathematics') echo "selected";?>>Mathematics</option>
                <option value="Mechanical Engineering" <?php if($row['Branch']=='Mechanical Engineering') echo "selected";?>>Mechanical Engineering</option>
                <option value="Humanities,Social Science and Management" <?php if($row['Branch']=='Humanities,Social Science and Management') echo "selected";?>>Humanities,Social Science and Management</option>
						</select>
					</td>
					<td>Year</td>
					<td><select class="form-control input" name="fromyear" required>
							<option value="">Select Year..</option>
							<?php 
								for ($i=2012; $i <=2030 ; $i++) { ?>
									<option value='<?php echo $i;?>' <?php if(substr($row['Regno'],0,4)==$i) echo "selected";?>><?php echo $i;?></option>
								<?php }
							?>
						</select>
					</td>
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
	$sql="update registration set name='$name',Regno='$regno',gender='$gender',mobileno='$mobile',email='$email',password='$password',Branch='$Branch' where userid='$id'";
	$con->query($sql);
	mysqli_close($con);
	//header("location:subscriberedit.php?id=$id");
	echo"<script>window.location.href='usersedit.php?id=".$id."';</script>";
}
?>