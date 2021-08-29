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
if(!$data['image'])
{
	if($data['Gender']=='M')
		$pic='profile_mm.jpg';
	else
		$pic='profile_f.jpg';
}
else
	$pic=$data['image'];
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
	<a href="index">Home</a> / Profile
</div>

<div class="container backbox">
	<div class="row">
		<div class="col-sm-9 page_details">
			<div class="col-sm-3">
				<div class="pic"><img src="user/<?php echo $pic;?>"></div>
			</div>
			<div class="col-sm-9">
				<div class="name"><?php echo $data['Name'];?></div>
				<div class="address">
					<i class="fa fa-map-marker"></i> <?php echo $data['Email'];?>
				</div>
			</div>
			<!--<div class="col-sm-9">
				<div class="address wow fadeInUp" data-wow-duration="5s">
					<i class="fa fa-map-marker"></i> 
				</div>
			</div>-->
			<!--<div class="col-sm-12">
				<span class="span wow fadeInUp" data-wow-duration="4s">Overview</span>
				<p class="details wow fadeInUp" data-wow-duration="5s">
					<?php echo $data['overview'];?>
				</p>
			</div>-->
			<div class="col-sm-12">
				<span class="span wow fadeInUp" data-wow-duration="3s">Details</span>
				<table class="table table2 wow fadeInUp" data-wow-duration="3s">
			<tr>
				<td width="250">Gender</td>
				<td><?php echo $data['Gender'];?></td>
			</tr>
			<tr>
				<td>Reg. No.</td>
				<td><?php echo $data['Regno'];?></td>
			</tr>
			<tr>
				<td>Branch</td>
				<td><?php echo $data['Branch'];?></td>
			</tr>
			<tr>
				<td>Year</td>
				<td><?php echo substr($data['Regno'],0,4)?></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><?php echo $data['MobileNo'];?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $data['Email'];?></td>
			</tr>

				</table>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="page_details wow fadeInUp" data-wow-duration="3s" style="padding: 0px; background: none; border: none;">
				<div class="status">
					<a href="#"><i class="fa fa-file-text" aria-hidden="true"></i> LIBRARY FINE</a>
				</div>
				<div class="status">
					<a href="upload_publication.php"><i class="fa fa-file-text" aria-hidden="true"></i> UPLOAD THESIS</a>
				</div>
				<div class="status">
					<a href="#"><i class="fa fa-file-text" aria-hidden="true"></i> YOUR THESIS</a>
				</div>
				<div class="status">
					<a href="#"><i class="fa fa-file-text" aria-hidden="true"></i> ALL THESIS</a>
				</div>

				<div class="status">
					Status = <span style="color: blue;"><?php echo $data['Type'];?></span>
				</div>

				<div class="notes">quick links</div>
				<div class="notess">
		            <a href="www.google.com">IEEE (IEL ONLINE)</a>
		            <a href="www.google.com">ASCE</a>
		            <a href="www.google.com">ASME</a>
		            <a href="www.google.com">Springer - Verlag</a>
		            <a href="www.google.com">SCIENCE-DIRECT</a>
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php
 include("include/footerstrip.php");
 ?>





<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>