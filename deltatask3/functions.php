<?php

$port=3308;
$con = mysqli_connect("localhost","root","","testi_database",$port);
function insertPost(){
    if(isset($_POST['sub'])){
        global $con;
        global $userid1;
        $content1 = htmlentities($_POST['partytype']);
        $content2 = htmlentities($_POST['partyhost']);
        $content3 = htmlentities($_POST['partyvenue']);
        $content4 = htmlentities($_POST['partydate']);
        $content5 = htmlentities($_POST['fontfamily']);
        $content6 = htmlentities($_POST['fontcolor']);
        $insert2 = "INSERT INTO  invitation (createrid,invitype,invihost,invivenue,invidate,fontfamily,fontcolor)  VALUES('$userid1' , '$content1', '$content2','$content3', '$content4', '$content5', '$content6')";
        $runi = mysqli_query($con,$insert2);
        if($runi){
            echo"<script>alert('your invitation has been created')</script>";
            echo "<script>window.open('createinvitation.php','_self')</script>";
        }
        else{
            echo "Not inserted" . mysqli_error($con);
        }
        }
    }
function get_posts(){
    global $con;
    global $userid1;
    $postperpage = 4;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 1;
    }
    $start_from = ($page-1) * $postperpage;
    $getpostss = "SELECT * FROM  invitation  ORDER by 1 DESC LIMIT $start_from , $postperpage";
    $runiposts = mysqli_query($con, $getpostss);
    while($row_posts = mysqli_fetch_array($runiposts)){
        $invi_id1 = $row_posts['invino'];             
        $user_id2 = $row_posts['createrid'];
        $invitype = $row_posts['invitype'];
        $invihost = $row_posts['invihost'];
        $invivenue = $row_posts['invivenue'];
        $invidate = $row_posts['invidate'];
        $fontcolor = $row_posts['fontcolor'];
        $fontfamily = $row_posts['fontfamily'];
        $namelower = strtolower($invihost);
        $typelower = strtolower($invitype);
        $onlydate = substr($invidate,0,2);
        $onlyday = substr($invidate,2);
        if($userid1 == $user_id2){
echo"<br><br><div  style='border: 1px solid black ; width: 1100px; height: 550px; overflow: hidden ; margin-left: 200px ; padding: 15px; 
background-image: url(cool-background.png)' ><br>
<div style='text-align: center; font-family: $fontfamily; 
font-style: italic ; text-shadow:  1px 1px blue ; font-size: 30px'> You are invited to join</div><br><br>
<div style='text-align: center; font-size: 45px; font-family: $fontfamily;  text-shadow:1px 1px red; font-style: italic'>
$namelower'<span style='font-size: 30px; font-style: italic'>s</span></div>        
<br><br><div style='text-align: center; font-family: $fontfamily; 
font-style: italic ; text-shadow:  1px 1px blue ; font-size: 30px' >$typelower party</div> <br>
<div style='text-align: center; font-family: $fontfamily; 
font-style: italic ; text-shadow:  1px 1px blue ; font-size: 30px'>on</div><br><br>
<div style='text-align: center; font-size: 40px; font-family: $fontfamily;  text-shadow:1px 1px red; font-style: italic'>
$onlydate<sup>th</sup>  of  $onlyday </div><br><br><br>
<div style='text-align: center; font-family: $fontfamily; 
font-style: italic ; text-shadow:  1px 1px blue ; font-size: 30px'>VENUE: $invivenue</div><br><br>
<a style='text-decoration: none ; text-align: right'  href ='invitingfriends.php?post_i=$invi_id1' ><button style=' color: rgb(27, 45, 209);
background-color: rgb(238, 178, 89);
            padding: 6px 11px;
            border: none;
            border-radius: 4px;
            margin-left: 1040px;
            cursor: pointer'>INVITE</button></a>
</div>";           
echo"<br><br>";
        }
    }

} 

function getinvitations(){
    global $con;
    global $username1; 
    $postperpage = 4;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 1;
    }
    $start_from = ($page-1) * $postperpage;
    $getpending = "SELECT * FROM  sendinvitation  WHERE statuss='sent'";
    $runpending = mysqli_query($con, $getpending);
   while($row_pending = mysqli_fetch_array($runpending)){
    $peninvino = $row_pending['generalid'];
        $penarticle = $row_pending['articleid'];             
        $pensendid = $row_pending['senderid'];
        $penreciname = $row_pending['receivername'];             
        $penstatus = $row_pending['statuss'];
        if($penreciname==$username1){
            $getinvis = "SELECT * FROM  invitation  WHERE invino='$penarticle'";
            $runiposts2 = mysqli_query($con, $getinvis);
            $row_posts2 = mysqli_fetch_array($runiposts2);
                $invi_id12 = $row_posts2['invino'];             
                $user_id22 = $row_posts2['createrid'];
                $invitype2 = $row_posts2['invitype'];
                $invihost2 = $row_posts2['invihost'];
                $invivenue2 = $row_posts2['invivenue'];
                $invidate2 = $row_posts2['invidate'];
                $fontfamily = $row_posts2['fontfamily'];
                $namelower2 = strtolower($invihost2);
                $typelower2 = strtolower($invitype2);
                $onlydate2 = substr($invidate2,0,2);
                $onlyday2 = substr($invidate2,2);
                
        echo"<br><br><div  style='border: 1px solid black ; width: 1100px; height: 550px; overflow: auto ; margin-left: 200px ; padding: 15px; 
        background-image: url(cool-background.png)' ><br>
        <div style='text-align: center; font-family: $fontfamily; 
        font-style: italic ; text-shadow:  1px 1px blue ; font-size: 30px'> You are invited to join</div><br><br>
 <div style='text-align: center; font-size: 45px; font-family: $fontfamily;  text-shadow:1px 1px red; font-style: italic'>
        $namelower2'<span style='font-size: 30px; font-style: italic'>s</span></div>        
        <br><br><div style='text-align: center; font-family: $fontfamily; 
        font-style: italic ; text-shadow:  1px 1px blue ; font-size: 30px' >$typelower2 party</div> <br>
        <div style='text-align: center; font-family: $fontfamily; 
        font-style: italic ; text-shadow:  1px 1px blue ; font-size: 30px'>on</div><br><br>
<div style='text-align: center; font-size: 40px; font-family: $fontfamily;  text-shadow:1px 1px red; font-style: italic'>
$onlydate2<sup>th</sup>  of  $onlyday2 </div><br><br><br>
<div style='text-align: center; font-family: $fontfamily; 
        font-style: italic ; text-shadow:  1px 1px blue ; font-size: 30px'>VENUE: $invivenue2</div><br><br>

    
     <button style=' color: rgb(27, 45, 209);
        background-color: rgb(238, 178, 89);
                    padding: 6px 11px;
                    border: none;
                    border-radius: 4px;
                    margin-left: 950px;
                    margin-top: 0px;
        cursor: pointer'> <a style='text-decoration: none ' href ='acceptinvi.php?post_i=$peninvino'>ACCEPT</a></button>
        
                    <button style=' color: rgb(27, 45, 209);
        background-color: rgb(238, 178, 89);
                    padding: 6px 11px;
                    border: none;
                    border-radius: 4px;
                    margin-left: 1040px;
                    margin-top: -27px;
                    cursor: pointer'><a style='text-decoration: none ' href ='rejectinvi.php?post_i=$peninvino' >REJECT</a> </button>             
        </div>";           
        echo"<br><br>";
                
        }
        }

}
function getacceptedinvitations(){
    global $con;
    global $username1; 
    $postperpage = 4;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 1;
    }
    $start_from = ($page-1) * $postperpage;
    $getpending1 = "SELECT * FROM  sendinvitation  WHERE statuss='accepted'";
    $runpending1 = mysqli_query($con, $getpending1);
   while($row_pending1 = mysqli_fetch_array($runpending1)){
    $peninvino = $row_pending1['generalid'];
        $penarticle1 = $row_pending1['articleid'];             
        $pensendid1 = $row_pending1['senderid'];
        $penreciname1 = $row_pending1['receivername'];             
        $penstatus1 = $row_pending1['statuss'];
        if($penreciname1==$username1){
            $getinvis1 = "SELECT * FROM  invitation  WHERE invino='$penarticle1'";
            $runiposts21 = mysqli_query($con, $getinvis1);
            $row_posts21 = mysqli_fetch_array($runiposts21);
                $invi_id121 = $row_posts21['invino'];             
                $user_id221 = $row_posts21['createrid'];
                $invitype21 = $row_posts21['invitype'];
                $invihost21 = $row_posts21['invihost'];
                $invivenue21 = $row_posts21['invivenue'];
                $invidate21 = $row_posts21['invidate'];
                $fontfamily = $row_posts21['fontfamily'];
                $namelower21 = strtolower($invihost21);
                $typelower21 = strtolower($invitype21);
                $onlydate21 = substr($invidate21,0,2);
                $onlyday21 = substr($invidate21,2);
                
        echo"<br><br><div  style='border: 1px solid black ; width: 1100px; height: 550px; overflow: hidden ; margin-left: 200px ; padding: 15px; 
        background-image: url(cool-background.png)' ><br>
        <div style='text-align: center; font-family: $fontfamily; 
        font-style: italic ; text-shadow:  1px 1px blue ; font-size: 30px'> You are invited to join</div><br><br>
 <div style='text-align: center; font-size: 45px; font-family: $fontfamily;  text-shadow:1px 1px red; font-style: italic'>
        $namelower21'<span style='font-size: 30px; font-style: italic'>s</span></div>        
        <br><br><div style='text-align: center; font-family: $fontfamily; 
        font-style: italic ; text-shadow:  1px 1px blue ; font-size: 30px' >$typelower21 party</div> <br>
        <div style='text-align: center; font-family: $fontfamily; 
        font-style: italic ; text-shadow:  1px 1px blue ; font-size: 30px'>on</div><br><br>
<div style='text-align: center; font-size: 40px; font-family: $fontfamily;  text-shadow:1px 1px red; font-style: italic'>
$onlydate21<sup>th</sup>  of  $onlyday21 </div><br><br><br>
<div style='text-align: center; font-family: $fontfamily; 
        font-style: italic ; text-shadow:  1px 1px blue ; font-size: 30px'>VENUE: $invivenue21</div><br><br></div>";

}}}
?>

