<?php
session_start();
$sesuser=$_SESSION['sesuser'];
if(!$sesuser)
    header("location:logout.php");

include('comman/connect.php');
$sql="select * from registration where email='$sesuser'";
$result = mysqli_query($con,$sql);
$data=mysqli_fetch_array($result);
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

<div class="table-responsive" style="padding-top:85px;width:50%;margin-left:400px;text-align:center;"><br>
<h3 style="text-align:center;color:blue;">Library Committe</h3><br>
    <table class="table table-bordered table-hover" >
  <thead style="background-color:black;color:white;">
  <h4 style="background-color:#d90166;color:white;height:40px;padding:10px 2px 2px 2px;">e-Library Complex Timings</h4>
  <h4 style="background-color:black;color:white;height:40px;padding:10px 2px 2px 2px;margin-top:-9.5px;">Day &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Timings </h4>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Working Days</th>
      <td>08:00 AM -  10:00 pm</td>
    </tr>
    <tr>
      <th scope="row">Saturday, Sunday & Public Holidays</th>
      <td>Closed due to COVID-19 Lockdown</td>
    </tr>
  </tbody>
</table>
</div>
<br><br><br><br><br><br>

<?php include('comman/footer.php'); 
?>