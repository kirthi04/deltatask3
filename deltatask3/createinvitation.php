<?php
include("header.php");
?>
<html>
    <head></head>
   <style>
       .homedec{
           margin-left: 320px;

       }
      .butone{
           width: 150px;  
           font-family:    
       }
       .col-75 {
  width: 740px;
  margin-top: 6px;
}
.colorplace{
    margin-top: -20px;
    margin-left: 690px;
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
 
   <form action="createinvitation.php?id=<?php echo $userid1 ?>"  method="POST"  ><br>
   <div class="homedec"><br><br><br>
   <textarea cols="100" rows="3" name="partytype" placeholder="type of party"></textarea><br> <br>  
   <textarea cols="100" rows="3" name="partyhost" placeholder="name of the host"></textarea><br> <br>
   <textarea cols="100" rows="3" name="partyvenue" placeholder="venue of the party"></textarea><br> <br>
  <div  class="col-75">
   <select id="fontfamily" class="col-75" name="fontfamily">
        <option value= 'Times New Roman, Times, serif'>Times New Roman, Times, serif</option>
        <option value="Arial, Helvetica, sans-serif">Arial, Helvetica, sans-serif</option>
        <option value="Lucida Console, Courier, monospace">Lucida Console, Courier, monospace</option>
        <option value="Impact, Charcoal, sans-serif">Impact, Charcoal, sans-serif</option>
        <option value="Comic Sans MS, cursive, sans-serif">Comic Sans MS, cursive, sans-serif</option>
      </select>
      </div><br><br>
   <textarea cols="100" rows="3" name="partydate" placeholder="date and month of the party without any space"></textarea><br> <br>
  
</div>
  <br><div class="butone"> <button id="btn-post"  name="sub"  style="width:150px ; height:30px ; background-color:green ; margin-left:600px">CREATE INVITATION</button> </div>
   </form>
<?php
 insertPost();
?>

    </body>
</html>