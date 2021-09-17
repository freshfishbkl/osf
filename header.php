<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>
        </title>
        <link
        rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link
        rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link rel="stylesheet" href="css/akki.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    </head>
   <?php 
   require_once('connections.php');
   if (!session_id())
   session_start();
   $lgn_name='';
   if(isset($_SESSION['uid']) && ($_SESSION['uid'])){
	   $uid=$_SESSION['uid'];
   $s = "select * from fish where id = '$uid'";
$result = mysqli_query($con, $s);
$obj = mysqli_fetch_object($result);
// $lgn_name= '  , '.$obj->first_name.' '.$obj->first_name ;
   }
   ?>
    <body>
        <div class="main_div">
            <div class="s_div">
			
                <h1 class="animated infinite heartBeat">WELCOME</h1>
                <div class="style"><?php echo $lgn_name;?></div>
				
            </div>
        <nav>
            
            <div class="home1" id='keek'>
                <!-- <div class="menu" id="check"> -->
                    <ul class="menu" id="check">
                    <?php
					     
                           if(isset($_SESSION['uid']) && ($_SESSION['uid'])){
                           ?>
                        <li> <a href="index.php" target="blank">HOME</a></li>
                        <li><a href="info.php">ORDER</a></li>
                        <li><a href="setting.php">CHANGE PASSWORD</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
                      
                       
                        <?php
                        }else{
                            ?>
                        <li><a href="login.php">LOG-IN</a></li>
                        <li><a href="signup.php">CREATE ACCOUNT</a></li>
                        <?php
                           }
                           ?>
                    </ul>
                <!-- </div> -->
                
                    <div class='buttonMenu'>
                        <a href="#" class="mobileicon" onclick="slideshow()"> <i class="fa fa-bars"></i></a>
                    </div>
                 
            </div>

        </nav>