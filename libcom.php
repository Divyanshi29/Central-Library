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
<div class="table-responsive" style="padding-top:85px;width:80%;margin-left:150px;text-align:center;"><br>
<h3 style="text-align:center;color:blue;">Library Committe</h3><br>
<table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead class="thead-dark">
  <tr style="text-align:center;">
      <th scope="col">S_NO</th>
      <th scope="col">NAME</th>
      <th scope="col">POSITION</th>
      <th scope="col">IMAGE</th>
      <th scope="col">Usertype</th>
    </tr>
  </thead>
  <tbody>
    <tr style="text-align:center;">
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr style="text-align:center;">
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
    <tr style="text-align:center;">
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

<?php include('comman/footer.php'); 
?>