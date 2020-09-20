<?php
include("header.php");
?>
<html>
    <head></head>
   <style>
      .rare{
        animation-name: example;
  animation-duration: 6s;
  animation-iteration-count: infinite;
}
@keyframes example {
  0%   {background-color:pink; }
  25%  {background-color:yellow; }
  50%  {background-color: rgba(201, 74, 226, 0.952); }
  75%  {background-color:rgba(104, 219, 240, 0.952); }
  100% {background-color:pink; }
}
body {
    background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
background-attachment: fixed;
  background-repeat: no-repeat;
    font-family: 'Vibur', cursive;
    font-family: 'Abel', sans-serif;
opacity: .95;
}

   </style>
 <body>
 <div class="rare">  
 <h1 style="text-align: center ;  ">INVITATIONS CREATED SO FAR</h1>  
 </div> 
 <?php
 get_posts(); 
  ?>   
</body>
</html>