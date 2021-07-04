<?php
session_start();
$sesuser=$_SESSION['sesuser'];
if(!$sesuser)
    header("location:logout.php");

include('comman/connect.php');
$data=mysqli_fetch_array($con->query("select * from registration where email='$sesuser'"));


// --------- For Pagination ------
	include_once "subscriber_function.php";

	if(isset($_GET["page"])){
		$page = (int)$_GET["page"];
		$i=($page-1)*15;
	}
	else{
	$page = 1;
	$i=0;
	}

	$setLimit = 15;
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
	xmlhttp.open("GET","findteam_name.php?name="+document.getElementById('name').value,false);
	xmlhttp.send(null);
	document.getElementById('data').innerHTML=xmlhttp.responseText;
}
function dis2()
{
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","findteam_post.php?post="+document.getElementById('post').value,false);
	xmlhttp.send(null);
	document.getElementById('data').innerHTML=xmlhttp.responseText;
}
</script>
</head>
<body>

<?php include('comman/menu.php');?>

<div class="main">
	<div class="hedding">Member List</div>
	<div class="form">
		<div class="searchform">
			<input type="search" name="name" placeholder="Enter Name for search...." id="name" onkeypress="dis()">
			<input type="search" name="post" placeholder="Enter Post  for search...." id="post" onkeypress="dis2()">

		</div>
		<div id="data">
		<table border="1">
			<tr class="tr">
				<td width="50">Sl. No</td>
				<td>Name</td>
				<td>Team Type</td>
				<td>Post</td>
				<td width='100'>Image</td>
				<td width="70">Action</td>
			</tr>
			<?php
				$sql = "SELECT * FROM libraryteam LIMIT ".$pageLimit." , ".$setLimit;
				$res=$con->query($sql);
				//$i=1;
				while($row=mysqli_fetch_array($res))
				{ $id=$row['memberid'];$pic=$row['pic'];
					echo "<tr>";
						echo "<td>".++$i."</td>";
						echo "<td>".$row['name']."</td>";
						echo "<td>".$row['teamtype']."</td>";
						echo "<td>".$row['teampost']."</td>";
						echo "<td><img src="."image/Library-Team/".$pic." width='100' height='100'></td>";
						echo "<td align='center'>
								<a href='usersedit.php?id=".$id."'><i class='fa fa-pencil'></i></a> | 
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
