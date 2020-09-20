<?php
session_start();
$port=3308;
$con = mysqli_connect("localhost","root","","testi_database",$port);
$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
$pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
$select_user = "SELECT  *  FROM  userregistration  where  mailid='$email' AND  passwords='$pass' ";
$query = mysqli_query($con, $select_user);
$_SESSION["newmail"] = $email;

$check_user = mysqli_num_rows($query);
if($check_user == 1)
{
   $_SESSION['user_mail'] = $email;
    echo "<script>window.open('header.php','_self')</script>";
}
else {
    echo "usermail or paaword does not match or does not exists";
}
?>