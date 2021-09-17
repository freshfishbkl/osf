<?php
    require_once('connections.php');
    if(!isset($_SESSION['username']) && ($_SESSION['password'] ) ){
        header('location:index.php');
    }  
    $old_password= mysqli_real_escape_string($con,$_POST['oldPassword']);
    $new_password= mysqli_real_escape_string($con,$_POST['newPassword']);
    $confirm_password= mysqli_real_escape_string($con,$_POST['retype']);
    $username=$_SESSION['username'];
    //echo $email;
    $password_from_database_query="select password from fish where username='$username'";
    $password_from_database_result=mysqli_query($con,$password_from_database_query) or die(mysqli_error($con));
    $row=mysqli_fetch_object($password_from_database_result);
	//print_r($row);exit;
    //echo $row['password'];
    if($row->password==$old_password){
        if ($new_password == $confirm_password){
        $update_password_query="update fish set password='$new_password' where username='$username'";
        $update_password_result=mysqli_query($con,$update_password_query) or die(mysqli_error($con));
        //echo "Your password has been updated.";
        ?>
        <script>
            window.alert("Your password has been updated!!");
            window.location.href="login.php";
        </script>
        <?php
    }}else{
        ?>
        <script>
            window.alert("Wrong password!!");
            window.location.href="setting.php";
        </script>
        <meta http-equiv="refresh" content="1;url=settings.php" />
        <?php
        //header('location:settings.php');
    }
?>