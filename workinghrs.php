<?php 
include("include/main.php");
include("include/header.php");
?>
<div class="container" style="width:60%;">
<h2 style="font-family:Times New Roman;"><b>Library Hours</b></h2><br>
    <h3 style="text-align:center;color:grey;"><b>The Central Library will be kept open for 362 days in a year</b></h3>

    <div class="row" style="text-align:center;font-family:Sans-Serif;">
    <table class="table table-bordered table-hover">
  <thead style="background-color:black;color:white;">
  <h4 style="background-color:#d90166;color:white;height:40px;padding:10px 2px 2px 2px;">e-Library Complex Timings</h4>
  <h4 style="background-color:black;color:white;height:40px;padding:10px 2px 2px 2px;margin-top:-9.5px; text-align: center;">Day &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Timings </h4>
  </thead>
  <tbody>
    <?php 
        include('comman/connect.php');
        $res=$con->query("select * from librarytime where deleted='' order by(timeid) desc");
        while($row=mysqli_fetch_array($res))
        {
          echo "<tr>";
          echo "<th scope='row'>Monday - Friday</th>";
          echo "<td>".$row['daytime']."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<th scope='row'>Saturday, Sunday & Public Holidays </th>";
          echo "<td>".$row['holidaytime']."</td>";
          echo "</tr>";
          break;
        }
    ?>
  </tbody>
</table>

<br><br><br><br><br><br>
</div>
</div>


<?php include("include/footerstrip.php"); ?>