<?php
require_once('connections.php');
// echo serialize($con);
$username = $_POST['username'];
$password = $_POST['password'];



$s = "select * from fish where username = '$username' and password = '$password'";
$result = mysqli_query($con, $s);
$obj = mysqli_fetch_object($result);
//print_r($obj);exit;
$num = mysqli_num_rows($result);
//echo serialize($num);
// echo  serialize($result);
if($num==1){
    $_SESSION['uid']=$obj->id;
    $_SESSION['username']=$obj->username;
     header('Location:http://localhost/website/index.php');
	 exit;
}
else {
   
    header('Location:http://localhost/website/login.php');
	exit;
    
}
?>