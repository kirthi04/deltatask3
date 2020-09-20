<?php
include("header.php");
?>
<html>
    <head></head>
    <style>
        h1{
            
            text-align: center;
            text-shadow:  2px 2px 2px rgb(33, 121, 148);
            
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
        <h1>ACCEPTED INVITATIONS</h1>
<?php
getacceptedinvitations();
?>        
</body>
</html>   