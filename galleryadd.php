<?php
ob_start();
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
	<div class="hedding">Add Gallery Images</div>
	<div class="form">
		<div class="formbox">
			<form method="post" action="#" enctype="multipart/form-data">
			<table border="1">
				<tr>
					<td>Image Name</td>
					<td><input type="text" name="imgname" required placeholder="Enter Image Name..."></td>
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
	
     $con->query("insert into gallery values(DEFAULT,'$imgname','$img')");
	move_uploaded_file($_FILES['img']['tmp_name'], "gallery/".$img);
	mysqli_close($con);
	header("location:galleryadd.php");
}
?>