<?php 
require_once('header.php');
?>
<link rel="stylesheet" href="css/setting.css">
   
        <!-- <div class="maindiv"> -->
            <div class="head"><h1>change Password</h1></div>
            <div class="contain">
                <form action="setting1.php" method="post">
                   Old password: <input type="password" name="oldPassword" placeholder="old password" class="password"><br><br>
                    New password:<input type="password" name="newPassword" placeholder="new password" class="password"><br><br>
                    Re-enter password: <input type="password" class="password" name="retype" placeholder="Re-type new password"><br><br>
                    <input type="submit" class="btn" value="Change">
                </form>
            </div>
        <!-- </div> -->
    <?php 
require_once('footer.php');
?>