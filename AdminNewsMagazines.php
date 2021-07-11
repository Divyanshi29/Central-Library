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
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp|.jfif)$/;
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
					<td>Image Type</td>
					<td> <select name="imgtype" required >
						<option value="none" selected disabled hidden>Select an Option</option>
						<option value="Newspaper">Newspaper</option>
						<option value="Magazines">Magazines</option>
					</select></td>
					<!-- <td><input type="text" id="type" name="imgtype" required></td> -->
				</tr>
				<tr>
					<td>Image Name</td>
					<td><input type="text" name="imgname" required placeholder="Enter Image Name..."></td>
				</tr>
				<tr>
					<td>Choose Image</td>
					<td><input type="file" id="fileupload" name="img" required></td>
				</tr>
                <tr>
					<td>Link</td>
					<td><input type="text" id="link" name="imglink" required></td>
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




<div class="main" style="border: 0px solid #333;">
	<div class="hedding">Add Gallery Images</div>
	<div class="form">
		<?php
			include('comman/connect.php');
			$res=$con->query("select * from  newsmagazines order by(Id) desc");
			while($row=mysqli_fetch_array($res))
			{ $id=$row['Id']; $pic=$row['pic']; ?>
				<div class="galbox">
					<img src="newsMagazines/<?php echo $pic;?>">
					<div class="gallname"><?php echo $row['Name'];?></div>
					<a href="delete.php?id=<?php echo $id;?>&&tname=magazine&&pic=<?php echo $pic;?>">Delete</a>
				</div>
			<?php }
		?>
		
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
	// echo "insert into newsmagazines values(Default,'$imgtype','$imgname','$img','$imglink')";
	$con->query("insert into newsmagazines values(Default,'$imgtype','$imgname','$img','$imglink')");
	move_uploaded_file($_FILES['img']['tmp_name'], "newsMagazines/".$img);
	mysqli_close($con);
	//header("location:AdminNewsMagazines.php");
}
?>