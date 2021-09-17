<?php 
require_once('header.php');
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
        <div class="left-right">
            <div class="left">
                <h1 class="office">O .S. F </h1>
                 <h2 class="office1">OM SAI FISHERIES</h2><br>
                 <div class="order"> <h2 class="animated infinite flash" >  
                      <?php
					     
                         if(isset($_SESSION['uid']) && ($_SESSION['uid'])){
                         ?> 
                         <a href="info.php">  click here to order</h2></a>
                         <?php
                        }else{
                            ?>
                             <?php
                           }
                           ?>
                         </div>
                 <img class="im" src="images/boat.jfif"   title="dock" width="90%" height="400px  " >
                 <h1 class="info"> <p> Om Sai Fisheries was est on 2005 and we do servies to our customer till date.
                     we buy fishes from boats and some will be sold in bhatkal,port and some will be sold in other market like Kerala,Goa etc  </p> 
                    </h1>
                </div>


            </div>
         </div>
         <?php 
require_once('footer.php');
?>