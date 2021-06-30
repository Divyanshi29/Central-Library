<?php
session_start();
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
        <?php
        $connection=mysqli_connect("localhost","root","","adminpanel");
            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                $query = "SELECT * FROM `mca2k04_15` WHERE S_NO='$id' ";
                $query_run = mysqli_query($connection, $query);
                if (!$query_run) {
                    printf("Error: %s\n", mysqli_error($connection));
                    exit();
                }
                while ($row = mysqli_fetch_array($query_run))
                {
                    ?>

                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['S_NO'];?>">

                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="edit_username" value="<?php echo $row['Name'];?>" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="edit_email" value="<?php echo $row['EMAIL_ID'];?>" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="edit_password" value="<?php echo $row['password'];?>"
                                    class="form-control" placeholder="Enter Password">
                            </div>

                            <div class="form-group">
                                <label>UserType</label>
                                <select name="update_usertype" class="form-control">
                                  <option value="admin">Admin</option>
                                  <option value="user">User</option>
                                 </select>
                            </div>

                            <a href="register.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
