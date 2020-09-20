<?php
$port=3308;
$con = mysqli_connect("localhost","root","","testi_database",$port);
$inviid = $_GET['post_i'];
$get_invi = "UPDATE  sendinvitation SET statuss='accepted' WHERE generalid = '$inviid'";
$run_post = mysqli_query($con, $get_invi);
if($run_post){
    echo"<script>alert('you have accepted the invitation')</script>";
    echo "<script>window.open('pending.php','_self')</script>";
}
else{
    echo "Not inserted" . mysqli_error($con);
}
?>