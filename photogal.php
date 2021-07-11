<?php 
include("include/main.php");
include("include/header.php");
?>
<style type="text/css">
.page_title
{
    width: 100%;
    min-height: 60px;
    font-family: 'Saira Semi Condensed', sans-serif;
    font-size: 2.5em;
    font-weight: bold;
    color: #444;
}
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
.gall_pic
{
    -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
}
.gall_pic img
{
    width: 100%;
    height: 40%;
    border: 1px solid #ddd;
    border-radius: 2px;
    padding: 5px;
}
@media (max-width: 500px) {
    .gall_pic {   
        -webkit-column-count: 1; /* Chrome, Safari, Opera */
        -moz-column-count: 1; /* Firefox */
        column-count: 1;
        }
    }
.page_details
{
    background: #fff;
    margin-top: 20px;
    padding:20px;
    border-radius: 4px;
    border: 1px solid #ddd;
}
</style>
<div id="page_head">
  <a href="index">Home</a> / Gallery
</div>
<div class="container page_details">
  <div class="row">
    <div class="col-sm-12">
      <div class="page_title">Some Moments...</div>
    </div>
    <div class="col-sm-12">
      <div class="gall_pic">
        <?php 
          include('comman/connect.php');
          $res=$con->query("select * from gallery order by(gid) desc");
          while($row=mysqli_fetch_array($res))
          {
            echo "<img src='gallery/".$row['pic']."'>";
          }
        ?>
      </div>
    </div>
  </div>
</div>
<br>

<?php include("include/footerstrip.php"); ?>
