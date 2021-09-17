<html>
    <head>
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="css/login.css">
        </head>
       
        <body>
            <div class="maindiv"> 
                <div class="login">
                    <div class="button">
                        <h1 class="name">LOGIN</h1>
                    </div>
                    <form class="inputbox" action="login1.php" method="post">
                        <input   class="field" type="text" placeholder= "Username" name='username' required>
                        <input  class="field" type="password" placeholder="Enter password" name='password' required><br>
                        <!-- <input type="checkbox" class="check"><span>Remember Password</span> -->
                       <br> <button type="submit" class="submit" >login</button>
                        <br> <br><a href="signup.php">Don't have account</a>
                        <br> <br><a href="forgetpassword.php">Forget Password</a>
                    </form>
                </div>
            </div>
        </body>
   
</html>