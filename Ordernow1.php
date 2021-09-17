<?php
require_once('connections.php');
$ss=mysqli_select_db($con,'akki');
$select= $_POST[ 'select'];
$quantity = $_POST['quantity'];
$address = $_POST['Address'];
$phoneno = $_POST['phone'];

// echo serialize($select)
// echo serialize($quantity)
// echo serialize($address)
// echo serialize($phoneno)
// $error = 0;
// if(isset($_POST['phone']) && !empty($_POST['phone'])){
// $email=mysqli_real_escape_string($conn,trim($_POST['phone']));
// }else{
//     $error = 1;
//     echo'<script> alert("Phone Number Cannot be Empty.")
//     window.location.href="ordernow.php"</script>';
// }



if ($address && $phoneno) {
    $signup1=" insert into order (select,quantity,Address,phoneno) values ('$select','$quantity','$address','$phoneno')";
    mysqli_query($con,$signup1);
    echo'<script>alert("order successful");
    window.location.href="index.php"
    </script>';
    
}else {

    echo'<script>alert("please enter data");
    window.location.href="ordernow.php"
    </script>';
}
?>