<?php
session_start();
$sesuser=$_SESSION['sesuser'];
if(!$sesuser)
    header("location:logout.php");

include('comman/connect.php');
$data=mysqli_fetch_array($con->query("select * from registration where email='$sesuser'"));

?>
<!DOCTYPE html>
<html>
<head>
  <title>::NIT JSR</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
</head>
<body>

<?php include('comman/menu.php');?>

<div class="main">
  <div id="msg"></div>
  <div class="hedding">Add Timing</div>
  <div class="form">
    <form method="post" action="#">
      <table border="1">
        <tr>
          <td>Enter Time Monday to Friday</td>
          <td><input type="text" name="Time" required placeholder="Enter Timing..." minlength="10" maxlength="200"></input></td>
        </tr>
        <tr>
          <td>Enter Time For Holiday</td>
          <td><input type="text" name="holi" required placeholder="Enter Timing..." minlength="10" maxlength="200"></input></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="Update" value="Update"></td>
        </tr>
      </table>
    </form>
  </div>
</div><br>

<div class="main">
  <div class="hedding">Time Table</div>
  <div class="form">
    <table border="1">
      <tr class="tr">
        <td width="100">Sl. No</td>
        <td>Monday to Friday</td>
        <td align="center">Holiday</td>
        <td width="100" align="center">Date</td>
        <td width="150" align="center">Action</td>
      </tr>
      <?php
        $res=$con->query("select * from librarytime where deleted='' order by(timeid) desc");
        $i=1;
        while($row=mysqli_fetch_array($res))
        { $id=$row['timeid'];
          echo "<tr>";
            echo "<td>".$i++."</td>";
            echo "<td>".$row['daytime']."</td>";
            echo "<td align='center'>".$row['holidaytime']."</td>";
            echo "<td align='center'>".$row['date']."</td>";
            echo "<td align='center'><a href='delete.php?id=".$id."&&tname=news'>Delete</a></td>";
          echo "</tr>";
        }
      ?>
    </table>
  </div>
</div>

<?php include('comman/footer.php');?>
</body>
</html>

<?php
if(isset($_POST['Update']))
{
  extract($_POST);
  include('comman/connect.php');
    $mail=1;
  $date=date('d-M-Y');
  $sql="insert into librarytime values(default,'$Time','$holi','$date','','$sesuser')";
  $con->query($sql);
  mysqli_close($con);
  //header("location:news.php");
?>

<script type="text/javascript">
  count="Add News Successfully ";
  //alert('value='+count);

  document.getElementById('msg').innerHTML=count;
  msg.style.padding = "20px";
  msg.style.color = "white";
  msg.style.background = "green";
  msg.style.margin = "0px 0px 10px 0px";

</script>

<?php } ?>