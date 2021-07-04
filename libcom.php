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

  <script language="javascript" type="text/javascript">
        window.onload = function () {
            var fileUpload = document.getElementById("fileupload");
            fileUpload.onchange = function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = document.getElementById("dvPreview");
                    dvPreview.innerHTML = "";
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    for (var i = 0; i < fileUpload.files.length; i++) {
                        var file = fileUpload.files[i];
                        if (regex.test(file.name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = document.createElement("IMG");
                                img.height = "160";
                                img.width = "150";
                                img.src = e.target.result;
                                dvPreview.appendChild(img);
                            }
                            reader.readAsDataURL(file);
                        } else {
                            alert(file.name + " is not a valid image file.");
                            dvPreview.innerHTML = "";
                            return false;
                        }
                    }
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            }
        };
    </script>
</head>
<body>

<?php include('comman/menu.php');?>

<div class="main" style="border: 0px solid #333;">
  <div class="hedding">Add Library Member</div>
  <div class="form">
    <div class="formbox">
      <form method="post" action="#" enctype="multipart/form-data">
      <table border="1">
        <tr>
          <td>Name</td>
          <td><input type="text" name="mname" required placeholder="Enter Member Name..."></td>
        </tr>
        <tr>
          <td>Team Type</td>
          <td>
            <select name="teamtype" required>
              <option value="">Select Team Type...</option>
              <option value="Library Committee">Library Committee</option>
              <option value="Library Staffs">Library Staffs</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Post</td>
          <td>
            <select name="teampost" required>
              <option value="">Select Post...</option>
              <option value="P/I Library,Chairman">P/I Library,Chairman</option>
              <option value="Convener">Convener</option>
              <option value="Member">Member</option>
              <option value="Librarian">Librarian</option>
              <option value="Assistant Librarian">Assistant Librarian</option>
              <option value="Typist Clerk">Typist Clerk</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Choose Image</td>
          <td><input type="file" id="fileupload" name="img" required></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="Upload" value="Upload"></td>
        </tr>
      </table>
      </form>
    </div>
    <div class="preview"><div id="dvPreview"></div></div>
    <div class="clear"></div>
  </div>
</div>

<?php include('comman/footer.php');?>
</body>
</html>

<?php
if(isset($_POST['Upload']))
{
  extract($_POST);
  include('comman/connect.php');
  $img=rand().$_FILES['img']['name'];
  
  $con->query("insert into libraryteam values(DEFAULT,'$mname','$teamtype','$teampost','$img')");
  move_uploaded_file($_FILES['img']['tmp_name'], "image/Library-Team/".$img);
  mysqli_close($con);
  //header("location:libcom.php");
  echo"<script>window.location.href='libcom.php';</script>";
}
?>