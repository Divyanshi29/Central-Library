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
	<a href="index">Home</a> / Upload Thesis
</div>

<div class="container page_details backbox">
	<div class="row">
		<form role="form" action="#" method="post" enctype="multipart/form-data">
		<div class="col-sm-12">
			<div class="page_title">Upload Your Thesis</div>
			<div class="contact_form">
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="name">Registration Number</label>
						<input type="text" class="form-control input" name="regno" placeholder="Enter Registration Number..." required value="" minlength="12" maxlength="12">
					</div>
					<div class="form-group col-sm-6">
						<label for="name">Author Name</label>
						<input type="text" class="form-control input" name="name" placeholder="Enter Author Name..." required value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="name">Department</label>
						<select class="form-control input" name="department" required>
							<option value="UG(B.Tech)">UG(B.Tech)</option>
							<option value="M.Tech.">M.Tech.</option>
							<option value="M.Sc.">M.Sc.</option>
							<option value="MCA">MCA</option>
							<option value="PhD">PhD</option>
						</select>
					</div>
					<div class="form-group col-sm-6">
						<label for="name">Branch</label>
						<select class="form-control input" name="Branch" required>
						<option value="Chemistry">Chemistry</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Computer Applications">Computer Applications</option>
                <option value="Physics">Physics</option>
                <option value="Electrical Engineering">Electrical and Electrical Engineering</option>
                <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                <option value="Metallurgical and Materials Engineering">Metallurgical and Materials Engineering</option>
                <option value="Production and Industrial Engineering">Production and Industrial Engineering</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Humanities,Social Science and Management">Humanities,Social Science and Management</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="name">Subject</label>
						<input type="text" class="form-control input" name="subject" placeholder="Enter Subject..." required value="">
					</div>
					<div class="form-group col-sm-6">
						<label for="name">Supervisors</label>
						<input type="text" class="form-control input" name="supervisors" placeholder="Enter Supervisors..." required value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="name">Thesis Types</label>
						<input type="text" class="form-control input" name="thesis" placeholder="Enter Thesis Types..." required value="">
					</div>
					<div class="form-group col-sm-6">
						<label for="name">File Upload<p style="color:red;float: right;padding-left: 20px; margin: 0px;">file name without special characters and space</p></label>
						<input type="file" class="form-control input" accept="application/pdf" name="file" placeholder="Enter File Upload..." required value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="name">Year</label>
						<select class="form-control input" name="toyear" required>
							<option value="">Select Year..</option>
							<?php 
								for ($i=2012; $i <=2030 ; $i++) { ?>
									<option value='<?php echo $i;?>'><?php echo $i;?></option>
								<?php }
							?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-12">
						<label for="name">Description</label>
						<textarea type="text" class="form-control input" name="Description" placeholder="Enter Name..." required value=""></textarea>
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
		$date=date('d-M-Y');
		if(!$_FILES['file']['name'])
		$apic="";
	    else{
		$apic=rand().$_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], "Publications/".$apic)
		or die ("Error!!");
	    }
		$sql="insert into publication values(default,'$regno','$name','$department','$Branch','$subject','$supervisors','$Description','$thesis','$apic','$toyear','$date','$date')";
		$con->query($sql);
		//header("location:profile.php");
		//echo"<script>window.location.href='upload_publication.php';</script>"; 				
	}
?>