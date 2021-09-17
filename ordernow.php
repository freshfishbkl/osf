

<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="css/ordernow.css">
    </head>
       

    <body>
        <div class="maindiv" >

            <div class="option">
                <h1 class="order">Order Now</h1>
             <div class="select"> 
             <form action="Ordernow1.php" method="post" >
                  
             <h2>Today available</h2> <select name=" select" >

                    <option class="h2">select</option>
                   
                    </select>

                </div>
                <div class="quantity">  Quantity:  
                <input class="q" type="number" name="quantity" >
                 
                    </div>
                   
                    <div class="address">
                     <textarea cols="40" rows="5" name="Address" placeholder="Address"></textarea>
                    </div>
                    
                      <div class="phone">Phone: <input type="text" name="country code" value="+91" size="1">
                        <input type="number" name="phone" size="10">   </div>
                     <div class="btn" ><button class="inside" type="submit"> Submit</button> </div>
                    </form>
                     


            </div>
            <div class="photo"> <img class="basket" src="images/basket1.jpg" alt=""></div>
        </div>
    </body>

</html>
