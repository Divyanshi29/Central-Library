<?php
session_start();
$sesuser=$_SESSION['sesuser'];
if(!$sesuser)
    header("location:logout.php");

include('comman/connect.php');
$data=mysqli_fetch_array($con->query("select * from registration where email='$sesuser'"));


// --------- For Pagination ------
	include_once "subscriber_function_user.php";

	if(isset($_GET["page"])){
		$page = (int)$_GET["page"];
		$i=($page-1)*30;
	}
	else{
	$page = 1;
	$i=0;
	}

	$setLimit = 10;
	$pageLimit = ($page * $setLimit) - $setLimit;


?>
<!DOCTYPE html>
<html>
<head>
	<title>:: Admin NIT jsr</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
function dis()
{
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","findstudent_name.php?name="+document.getElementById('name').value,false);
	xmlhttp.send(null);
	document.getElementById('data').innerHTML=xmlhttp.responseText;
}
function dis2()
{
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","findstudent_mobile.php?mobile="+document.getElementById('mobile').value,false);
	xmlhttp.send(null);
	document.getElementById('data').innerHTML=xmlhttp.responseText;
}
</script>
</head>
<body>

<?php include('comman/menu.php');?>

<div class="main">
	<div class="hedding">User List</div>
	<div class="form">
		<div class="searchform">
			<input type="search" name="name" placeholder="Enter Name for search...." id="name" onkeypress="dis()">
			<input type="search" name="mobile" placeholder="Enter Mobile No. for search...." id="mobile" onkeypress="dis2()">

		</div>
		<div id="data">
		<table border="1">
			<tr class="tr">
				<td width="50">Sl. No</td>
				<td>Name</td>
				<td>Gender</td>
				<td>RegiNo</td>
				<td>Email</td>
				<td>Mobile</td>
				<td>Branch</td>
				<td>Year</td>
				<td>Type</td>
				<td width="70">Action</td>
			</tr>
			<?php
				$sql = "SELECT * FROM registration order by(userid) desc LIMIT ".$pageLimit." , ".$setLimit;
				$res=$con->query($sql);
				//$i=1;
				while($row=mysqli_fetch_array($res))
				{ $id=$row['UserId'];
					echo "<tr>";
						echo "<td>".++$i."</td>";
						echo "<td>".$row['Name']."</td>";
						echo "<td>".$row['Gender']."</td>";
						echo "<td>".$row['Regno']."</td>";
						echo "<td>".$row['Email']."</td>";
						echo "<td>".$row['MobileNo']."</td>";
						echo "<td>".$row['Branch']."</td>";
						echo "<td>".substr($row['Regno'],0,4)."</td>";
						echo "<td align='center'>".$row['Type']."</td>";
						echo "<td align='center'>
								<a href='userview.php?id=".$id."'><i class='fa fa-eye'></i></a> | <a href='usersedit.php?id=".$id."'><i class='fa fa-pencil'></i></a> | 
								<a href='delete.php?id=".$id."&&tname=account1'><i class='fa fa-trash'></i></a>
						</td>";
					echo "</tr>";
				}
				echo "<tr>
						<td colspan='9'>
						<div class='pagination'>".
							displayPaginationBelow($setLimit,$page).
						"</div></td>
					</tr>";
			?>
		</table>
		</div>
	</div>
</div>

<?php include('comman/footer.php');?>
</body>
</html>
