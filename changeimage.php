<?php 
include('comman/connect.php');
include('include/main.php');
include('include/header.php');
if(isset($_SESSION['user'])){
    $user_ses=$_SESSION['user'];
}
else
{
    echo"<script>window.location.href='SignIn.php';</script>";	
}
if(!$data['image'])
{
	if($data['Gender']=='M')
		$img='user/profile_mm.jpg';
	else
		$img='user/profile_f.jpg';
}
else
   $img = $data['image'];
?>

<!DOCTYPE html>
<html>
<head>

	<script type="text/javascript" src="js/jquery.js"></script>
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

<style type="text/css">
	#dvPreview img
	{
	width: 180px;
	height: 180px;
	border-radius: 100%;
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
	.page_details
	{
	background: #fff;
	margin-top: 20px;
	padding:20px;
	border-radius: 4px;
	border: 1px solid #ddd;
	}
	.page_title
    {
    width: 100%;
    min-height: 60px;
    font-family: 'Saira Semi Condensed', sans-serif;
    font-size: 2.5em;
    font-weight: bold;
    color: #444;
    }    
	.backbox{margin-bottom: 30px;}
	.pic
	{
	width: 170px;
	height: 170px;
	border-radius: 100%;
	}
	.pic img
	{
	width: 170px;
	height: 170px;
	border-radius: 100%;
	}


</style>
</head>

<body>

<div id="page_head">
	<a href="index">Home</a> / Change Profile Image
</div>

<div class="container page_details backbox" style="min-height: 400px;">
	<div class="row">
		<div class="col-sm-6">
			<div class="page_title">Fill This Form</div>
			<div class="contact_form">
				<form role="form" action="#" method="post" enctype="multipart/form-data">
					<div class="form-group col-sm-10">
						<label for="name">Profile Images</label>
						<input type="file" class="form-control input" name="img" id="fileupload">
					</div>
					<div class="form-group col-lg-4">
						<label for="name"></label>
						<input type="submit" class="form-control btn btn-primary" name="save" value="Update">
					</div>
				</form>
				<?php
				if(isset($_POST['save']))
				{
					extract($_POST);
					if($_FILES=="")
						$pic=$img;
					else
						$pic=rand().$_FILES['img']['name'];

					$sql="update registration set image='$pic' where email='$user_ses'"; 
					$con->query($sql);
					move_uploaded_file($_FILES['img']['tmp_name'], "user/".$pic);
					unlink("user/$img");
					//header("location:profile.php"); 
					echo"<script>window.location.href='profile.php';</script>";				
				}
				?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="page_title" style="padding-top: 20px;">
				<div id="dvPreview"><img src="user/<?php echo $img;?>"></div>
			</div>
		</div>
	</div>
</div>



<?php include("include/footerstrip.php"); ?>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>