<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="css/signup.css">
        <title></title>

    </head>

    
       
        <body>
            <div class="maindiv">
                <div class="logo"> <img class="fish" src="images/logo.jpg" width="100%" height="300vh" > </div>
                <div class="page"> 
                    <form class="ak" action="signup1.php" method="post" id="aki">
                        First name  : <input class="same" type="text" name="first_name" required ><br>
                        Last name    : <input class="same"  type="text"  name="last_name" required><br>
                        Username     :  <input class="same" type="text"  name="username" required><br>
                        Password     :  <input class="same" type="password" name="password" required><br> 
                        Phone: <input type="text" name="country code" value="+91" size="1">
                        
                        <input type="number" name="phone"  size="11" required >
                        <br><br><br>

                         <button class="submit" type="submit"  name="signin"> Create account</button> 
                         <br> <br><a href="login.php">Already have account?</a>
                    </form>
                    <button id="akki"  type="submit" name="code"  >Get OTP</button><br>
                        <input id="me" type="text" name="otp" placeholder="enter your otp"> 
                        <button id="veri" type="submit"  name="verify ">Verify OTP</button>
                    
                </div>
            </div>
        
           
        </body>
    
</html>