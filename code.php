<?php
include('security.php');
$connection=mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['save_faculty']))
{
    $name = $_POST['faculty_name'];
    $desig = $_POST['faculty_designation'];
    $description = $_POST['faculty_description'];
    $images = $_FILES["faculty_image"]['Name'];

   if(file_exists("upload/".basename($_FILES["faculty_image"]["name"]))){
       $store=$_FILES['faculty_image']['name'];
        $_SESSION['status'] = "Image Already Exists . '.$store.'";
        //$_SESSION['status_code'] = "success";
       header('Location: faculty.php');
   }else{
         $query = "INSERT INTO `faculty` ('Name','Designation','Description','Images') VALUES ($name,$desig,$description,$images)";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
         {
         movie_uploaded_files($_FILES['faculty_image']['tmp_name'],"upload/".$_FILES['faculty_image']['name']);
        $_SESSION['success'] = "Faculty Added";
        //$_SESSION['status_code'] = "success";
        header('Location: faculty.php');
      }
       else
       {
        $_SESSION['status'] = "Faculty Not Added";
        //$_SESSION['status_code'] = "error";
        header('Location: faculty.php');
    }
  }
}




if(isset($_POST['registerbtn']))
{
    $username = $_POST['Name'];
    $email = $_POST['EMAIL_ID'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype=$_POST['usertype'];

    $email_query = "SELECT * FROM mca2k04_15 WHERE EMAIL_ID='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
    }
   else
    {
        if($password === $cpassword)
        {
            $connection=mysqli_connect("localhost","root","","mca2k04-15");
            $query = "INSERT INTO `mca2k04_15` ('Name','EMAIL_ID','password','usertype') VALUES ($username,$email,$password,$usertype)";
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Admin Profile Added";
                //$_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                //$_SESSION['status_code'] = "error";
                header('Location: register.php');
            }
        }
        else
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            //$_SESSION['status_code'] = "warning";
            header('Location: register.php');
        }
}
}
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertypeupdate=$_POST['update_usertype'];
    $query = "UPDATE `mca2k04_15` SET  `S_NO`='$id' ,`Name`='$username', `EMAIL_ID`='$email', `password`='$password',`usertype`='$usertypeupdate' WHERE `S_NO`='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        //$_SESSION['status_code'] = "success";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        //$_SESSION['status_code'] = "error";
        header('Location: register.php');
    }
}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM mca2k04_15 WHERE S_NO='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
    }
}

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM `mca2k04_15` WHERE EMAIL_ID='$email_login'AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['EMAIL_ID'] = $email_login;
        $_SESSION['status_code'] = "success";
        header('Location:index.php');
    }
    else
    {
        $_SESSION['status'] = 'Email id/password is invalid';
        $_SESSION['status_code'] = "error";
        header('Location: ../signup.php');
    }
}


?>
