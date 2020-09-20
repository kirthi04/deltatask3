<html>
    <head>

    </head>
    <?php 
$port=3308;
$con = mysqli_connect("localhost","root","","testi_database",$port);
$invisid = $_GET['post_i']; ?>
    <style>
       .homedec{
           margin-left: 320px;

       }
      .butone{
           width: 150px;     
       }
       body{
           background-image: linear-gradient(pink,black);
       }

   </style>
    <body>
    <form action=""  method="POST">
        <div class="homedec"><br><br><br>
        <textarea cols="120" rows="5" name="receiver" placeholder="type the username of those people to whom you want to send this invitation(use
   , to differentiate the names)"></textarea><br> <br>
</div>
  <br><div class="butone"> <input type="submit" id="btn-post"  name="sub"  style="width:150px ; height:30px ; 
  background-color: rgb(139, 195, 209); margin-left:710px ; border-radius: 10px"> </div>
        </form>
    </body>
    <?php 
if(isset($_POST['sub'])){
    $recieverss = $_POST['receiver'];
    $allrecievers = explode(",",$recieverss);
    $maxno = count($allrecievers);
    $getinviuser = "SELECT * FROM  invitation  WHERE invino='$invisid'";
    $runinvitation = mysqli_query($con, $getinviuser);
    $row_posts = mysqli_fetch_array($runinvitation);
        $creatorsid = $row_posts['createrid'];    
$j= 0;

    for($i = 0; $i < $maxno ; $i++){
        $addingcontent = "INSERT INTO sendinvitation (articleid,senderid,receivername,statuss) VALUES ('$invisid','$creatorsid','$allrecievers[$i]',
        'sent')";
         $runi_invi = mysqli_query($con,$addingcontent);
         if($runi_invi){
            $j++;
         }
         else{
             echo "Not inserted" . mysqli_error($con);

         }
    }
if($j>0){
    echo "<script>window.open('createinvitation.php','_self')</script>";
}}
?> 
</html>