<?php
$name=$_REQUEST['tname'];
$id=$_REQUEST['id'];

include('comman/connect.php');

if($name=="whrs")
{
	$con->query("delete from librarytime where timeid='$id'");
	//mysql_query("update batch set deleted='Delete' where bid='$id'");
	header("location:whr.php");
}

if($name=="account1")
{
	 $row=mysqli_fetch_array($con->query("select * from registration where userid='$id'"));
	 $pic=$row['image'];
	 $con->query("delete from registration where userid='$id'");
	 unlink("user/$pic");
	 header("location:showusers.php");
}

if($name=="library")
{
	$row=mysql_fetch_array($con->query("select * from assignment where memberid='$id'"));
	$pic=$row['pic'];
	$con->query("delete from libraryteam where memberid='$id'");
	unlink("image/Library-Team/$pic");
	header("location:libcomshow.php");
}

if($name=="gallery")
{
	$pic=$_REQUEST['pic'];
	 $con->query("delete from gallery where gid='$id'");
	 unlink("gallery/$pic");
	header("location:galleryshow.php");
}
if($name=="magazine")
{
	$pic=$_REQUEST['pic'];
	 $con->query("delete from newsmagazines where Id='$id'");
	 unlink("newsMagazines/$pic");
	header("location:AdminNewsMagazines.php");
}

if($name=="news")
{
	//mysql_query("delete from news where nid='$id'");
	$con->query("update news set deleted='Delete' where nid='$id'");
	header("location:news.php");
}

if($name=="message")
{
	//mysql_query("delete from message where mid='$id'");
	$con->query("update message set deleted='Delete' where mid='$id'");
	header("location:message.php");
}

if($name=="contact")
{
	//mysql_query("delete from contact where c_id='$id'");
	header("location:inbox.php");
}

if($name=="contactreply")
{
	//mysql_query("delete from contactreply where cr_id='$id'");
	header("location:sentmail.php");
}


?>