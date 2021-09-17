<?php
require_once('connections.php');

// echo serialize($con);
$ss=mysqli_select_db($con,'akki');
$first_name = $_POST[ 'first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone =$_POST['phone'];
 

 $error = 0;
 if(isset($_POST['phone']) && !empty($_POST['phone'])){
 $email=mysqli_real_escape_string($conn,trim($_POST['phone']));
 }else{
     $error = 1;
     echo'<script> alert("Phone Number Cannot be Empty.")
     window.location.href="signup.php"</script>';
 }
//  echo(serialize('avcc'));

$s = "select username,phone from fish where username = '$username' or phone ='$phone' ";
$result = mysqli_query($con, $s);

 if (mysqli_num_rows($result) > 0){
 $row = mysqli_fetch_assoc($result);
// echo  serialize($result);
if($username==$row['username']){

    echo'<script>alert("username already taken")
       window.location.href="signup.php"</script>';
}
    elseif($phone==$row['phone']){
        echo'<script>alert("phone number already exists")
       window.location.href="signup.php"</script>';

     }


else {
    

    $signup1=" insert into fish (first_name,last_name,username,password,phone) values ('$first_name','$last_name','$username','$password','$phone')";
    mysqli_query($con,$signup1);

    echo'<script>alert("signup successful");
           window.location.href="login.php";
    </script>';
    //   header("Location:login.php");
    
}
 }

?>