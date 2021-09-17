<script>
             function slideshow(){
                 var x = document.getElementById('check');
                 var y=document.getElementById('keek');
                 
                 if( x.style.display==="none"){
                    x.style.display="flex";
                    x.style.flexDirection='column';
                    x.style.justifyContent='space-around';
                    x.style.alignItems='flex-start';
                    x.style.marginLeft='0px';
                    x.style.height='18vh';

                    y.style.transition='height 0.5s';
                    y.style.height='18vh';
                 }else{
                    x.style.display="none";
                    y.style.height='5vh';

                 }

             }
         </script>
        
        
        
    </body>
</html>