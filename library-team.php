<?php

include("include/main.php");
include("include/header.php");
?>
<section style="margin-bottom: 20px;">
  <div class="container" style="box-shadow: 2px 2px 10px black;">
    <div class="row">
      <div class="col">
        <h3 style="text-align: center;font-weight: bolder;">Library Team</h3>
      </div>
    </div>
      <?php
        include('comman/connect.php');
        $sql1 = "SELECT distinct teamtype FROM libraryteam order by(teamtype)";
        $res1=$con->query($sql1);
        while($row1=mysqli_fetch_array($res1))
        { $team=$row1['teamtype'];
          echo "<h4 style='padding: 15px 5px 10px 20px; font-weight: bolder;background-color: #cecece;'>".$row1['teamtype']."</h4>";
          $sql = "SELECT * FROM libraryteam where teamtype='$team' order by(memberid)";
          $res=$con->query($sql);
          $i=1;
          $f=0;
          while($row=mysqli_fetch_array($res))
          { $pic=$row['pic'];
            if($i==1){
              echo "<div class='row'>";
              echo "<div class='col-sm-12' style='padding: 30px;'>";
              echo "<div class='team'>";
              echo "<div class='team-img'>";
              echo "<img style='border-radius: 100%;' src="."image/Library-Team/".$pic.">";
              echo "</div>";
              echo "<div class='mname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['name']."</p>";
              echo "</div>";
              echo "<div class='pname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['teampost']."</p>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
            }
            elseif($i==2||$i==3){
              if($f==0 && $i==2){
                $f=1;
              echo "<div class='row'>";

              echo "<div class='col-sm-6' style='padding: 30px;'>";
              echo "<div class='team'>";
              echo "<div class='team-img'>";
              echo "<img style='border-radius: 100%;' src="."image/Library-Team/".$pic.">";
              echo "</div>";
              echo "<div class='mname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['name']."</p>";
              echo "</div>";
              echo "<div class='pname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['teampost']."</p>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              }else{
              echo "<div class='col-sm-6' style='padding: 30px;'>";
              echo "<div class='team'>";
              echo "<div class='team-img'>";
              echo "<img style='border-radius: 100%;' src="."image/Library-Team/".$pic.">";
              echo "</div>";
              echo "<div class='mname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['name']."</p>";
              echo "</div>";
              echo "<div class='pname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['teampost']."</p>";
              echo "</div>";
              echo "</div>";
              echo "</div>";

              echo "</div>";
              $f=0;
              }
            }
            else{
              if($i%4==0 && $f==0){
                $f=1;
                echo "<div class='row'>";

              echo "<div class='col-sm-3' style='padding: 30px;'>";
              echo "<div class='team'>";
              echo "<div class='team-img'>";
              echo "<img style='border-radius: 100%;' src="."image/Library-Team/".$pic.">";
              echo "</div>";
              echo "<div class='mname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['name']."</p>";
              echo "</div>";
              echo "<div class='pname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['teampost']."</p>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              }
              elseif($i%4==1){
                echo "<div class='col-sm-3' style='padding: 30px;'>";
              echo "<div class='team'>";
              echo "<div class='team-img'>";
              echo "<img style='border-radius: 100%;' src="."image/Library-Team/".$pic.">";
              echo "</div>";
              echo "<div class='mname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['name']."</p>";
              echo "</div>";
              echo "<div class='pname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['teampost']."</p>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              }
              elseif($i%4==2){
                echo "<div class='col-sm-3' style='padding: 30px;'>";
              echo "<div class='team'>";
              echo "<div class='team-img'>";
              echo "<img style='border-radius: 100%;' src="."image/Library-Team/".$pic.">";
              echo "</div>";
              echo "<div class='mname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['name']."</p>";
              echo "</div>";
              echo "<div class='pname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['teampost']."</p>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              }
              else{
                echo "<div class='col-sm-3' style='padding: 30px;'>";
              echo "<div class='team'>";
              echo "<div class='team-img'>";
              echo "<img style='border-radius: 100%;' src="."image/Library-Team/".$pic.">";
              echo "</div>";
              echo "<div class='mname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['name']."</p>";
              echo "</div>";
              echo "<div class='pname'>";
              echo "<p style="."font-family: 'Montserrat', sans-serif;".">".$row['teampost']."</p>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              $f=0;
              }
            }
            $i++;
          }
        }  
      ?>
  </div>
</section>
<?php include("include/footerstrip.php"); ?>