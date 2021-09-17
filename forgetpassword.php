<?php 
require_once('header.php');
?>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="css/forget.css">
    
    <body>
        <div class="main">
        <h1>FORGET PASSWORD</h1>
            <div class="forget">
               
                <form  action="forget1.php" method="post">
                New Password     :  <input class="same" type="password" name="password" required><br> 
                        Phone: <input type="text" name="country code" value="+91" size="1">
                        
                        <input type="number" name="phone"  size="11" required >
                        <br><br><br>

                         <button class="submit" type="submit"  name="cpas"> change password</button> 
                         
                    </form>
                    <button id="akki"  type="submit" name="code"  >Get OTP</button><br>
                        <input id="me" type="text" name="otp" placeholder="enter your otp"> 
                        <button id="veri" type="submit"  name="verify ">Verify OTP</button>
                    
            </div>

        </div>
        
    </body>
    <?php 
require_once('footer.php');
?>