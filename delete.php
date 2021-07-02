<?php
$name=$_REQUEST['tname'];
$id=$_REQUEST['id'];

include('comman/connect.php');

if($name=="batch")
{
	//mysql_query("delete from batch where bid='$id'");
	//mysql_query("update batch set deleted='Delete' where bid='$id'");
	header("location:batchshow.php");
}

if($name=="account1")
{
	 //$row=mysqli_fetch_array(mysql_query("select * from account1 where ac_id='$id'"));
	// $pic=$row['pic'];
	// mysql_query("delete from account1 where ac_id='$id'");
	// unlink("user/$pic");
	header("location:subscribeshow.php");
}

if($name=="assignment")
{
	// $row=mysql_fetch_array(mysql_query("select * from assignment where asid='$id'"));
	// $pic=$row['image'];
	// mysql_query("delete from assignment where asid='$id'");
	// unlink("assignment/$pic");
	header("location:assignmentshow.php");
}

if($name=="gallery")
{
	$pic=$_REQUEST['pic'];
	 $con->query("delete from gallery where gid='$id'");
	 unlink("gallery/$pic");
	header("location:galleryshow.php");
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