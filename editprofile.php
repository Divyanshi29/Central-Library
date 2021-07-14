<?php 
include('comman/connect.php');
include('include/main.php');
include('include/header.php');
if(isset($_SESSION['user'])){
    $user_ses=$_SESSION['user'];
}
else
{
    echo"<script>window.location.href='SignIn.php';</script>";	
}
?>
<style type="text/css">
#page_head
{
    min-height: 80px;
    background: #fff; /* For browsers that do not support gradients */
    background: -webkit-radial-gradient(circle, #ddd,#f5f5f5); /* Safari */
    background: -moz-radial-gradient(circle, #ddd,#f5f5f5); /* Safari */
    background: -o-radial-gradient(circle, #ddd,#f5f5f5); /* Safari */
    text-align: center;
    font-size: 1.3em;
    line-height: 80px;
    color: #444;
    font-family: 'Saira Semi Condensed', sans-serif;
    font-weight: bold;
}
.page_details
{
    background: #fff;
    margin-top: 20px;
    padding:20px;
    border-radius: 4px;
    border: 1px solid #ddd;
}
.page_title
    {
    width: 100%;
    min-height: 60px;
    font-family: 'Saira Semi Condensed', sans-serif;
    font-size: 2.5em;
    font-weight: bold;
    color: #444;
    }    
.backbox{margin-bottom: 30px;}
.pic
{
    width: 170px;
    height: 170px;
    border-radius: 100%;
}
.pic img
{
    width: 170px;
    height: 170px;
    border-radius: 100%;
}
.name
{
    font-size: 2em;
    margin-top: 50px;
    text-transform: capitalize;
}
.address
{
    font-size: 1.2em;
}
.span
{
    font-size: 1.4em;
    font-weight: bold;
    margin: 30px 0px 10px 0px;
    display: block;
}
.table2
{
    font-size: 1.2em;
}

.status
{
    font-size: 1.4em;
    font-weight: bold;
    height: 60px;
    line-height: 60px;
    padding-left: 15px;
    border-radius: 5px;
    border:1px solid #ddd;
    margin-bottom: 10px;
    background: #fff;
    font-family: 'Saira Semi Condensed', sans-serif;
}

.notes
{
    font-size: 1.4em;
    font-weight: bold;
    height: 60px;
    line-height: 60px;
    padding-left: 15px;
    border-radius: 5px 5px 0px 0px;
    border:1px solid #ddd;
    background: #fff;
    font-family: 'Saira Semi Condensed', sans-serif;
}
.notess
{
    font-size: 1.2em;
    border:1px solid #ddd;
    border-radius: 0px 0px 5px 5px;
    border-top: none;
    background: #fff;
}
.notess a
{
    display: block;
    padding: 10px 15px;
    text-decoration: none;
    border-bottom:1px dotted #ddd;
}
.notess a:hover
{
    background: #f5f5f5;
}
</style>
<div id="page_head">
	<a href="index">Home</a> / Profile Edit
</div>

<div class="container page_details backbox">
	<div class="row">
		<form role="form" action="#" method="post">
		<div class="col-sm-12">
			<div class="page_title">Modify Your Details</div>
			<div class="contact_form">
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="name">Name</label>
						<input type="text" class="form-control input" name="name" placeholder="Enter Name..." required value="<?php echo $data['Name'];?>">
					</div>
					<div class="form-group col-sm-6">
						<label for="name">Gender</label>
						<select class="form-control input" name="gender" required>
							<option value="">Select Gender..</option>
							<option value="M" <?php if($data['Gender']=='M') echo "selected";?>>Male</option>
							<option value="F" <?php if($data['Gender']=='F') echo "selected";?>>Female</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="name">Email</label>
						<input type="text" class="form-control input" name="email" placeholder="Enter Mobile..." required value="<?php echo $data['Email'];?>" minlength="10" maxlength="10">
					</div>
					<div class="form-group col-sm-6">
						<label for="name">Reg. No.</label>
						<input type="text" class="form-control input" name="regno" placeholder="Enter Mobile..." required value="<?php echo $data['Regno'];?>" minlength="10" maxlength="10">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="name">Branch</label>
						<select class="form-control input" name="Branch" required>
							<option value="Chemistry" <?php if($data['Branch']=='Chemistry') echo "selected";?>>Chemistry</option>
                <option value="Civil Engineering" <?php if($data['Branch']=='Civil Engineering') echo "selected";?>>Civil Engineering</option>
                <option value="Computer Applications" <?php if($data['Branch']=='Computer Applications') echo "selected";?>>Computer Applications</option>
                <option value="Physics" <?php if($row['Branch']=='Physics') echo "selected";?>>Physics</option>
                <option value="Electrical Engineering" <?php if($data['Branch']=='Electrical Engineering') echo "selected";?>>Electrical Engineering</option>
                <option value="Electronics and Communication Engineering" <?php if($data['Branch']=='Electronics and Communication Engineering') echo "selected";?>>Electronics and Communication Engineering</option>
                <option value="Computer Science and Engineering" <?php if($data['Branch']=='Computer Science and Engineering') echo "selected";?>>Computer Science and Engineering</option>
                <option value="Metallurgical and Materials Engineering" <?php if($data['Branch']=='Metallurgical and Materials Engineering') echo "selected";?>>Metallurgical and Materials Engineering</option>
                <option value="Production and Industrial Engineering" <?php if($data['Branch']=='Production and Industrial Engineering') echo "selected";?>>Production and Industrial Engineering</option>
                <option value="Mathematics" <?php if($data['Branch']=='Mathematics') echo "selected";?>>Mathematics</option>
                <option value="Mechanical Engineering" <?php if($data['Branch']=='Mechanical Engineering') echo "selected";?>>Mechanical Engineering</option>
                <option value="Humanities,Social Science and Management" <?php if($data['Branch']=='Humanities,Social Science and Management') echo "selected";?>>Humanities,Social Science and Management</option>
						</select>
					</div>
					<div class="form-group col-sm-6">
						<label for="name">Mobile</label>
						<input type="text" class="form-control input" name="mobile" placeholder="Enter Mobile..." required value="<?php echo $data['MobileNo'];?>" minlength="10" maxlength="10">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="name">Year</label>
						<select class="form-control input" name="fromyear" required>
							<option value="">Select Year..</option>
							<?php 
								for ($i=2012; $i <=2030 ; $i++) { ?>
									<option value='<?php echo $i;?>' <?php if(substr($data['Regno'],0,4)==$i) echo "selected";?>><?php echo $i;?></option>
								<?php }
							?>
						</select>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="name"></label>
						<input type="submit" class="form-control btn btn-primary input_batt" name="save" value="Submit">
					</div>
				</div>		
			</div>
		</div>		
		</form>
	</div>
</div>



<?php
 include("include/footerstrip.php");
 ?>



<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

<?php
	if(isset($_POST['save']))
	{
		extract($_POST);
		$sql="update registration set name='$name',Regno='$regno', gender='$gender',mobileno='$mobile',Branch='$Branch' where email='$user_ses'"; 
		echo $sql;
		$con->query($sql);
		//header("location:profile.php");
		echo"<script>window.location.href='profile.php';</script>"; 				
	}
?>