<?php
include("functions.php");
$port=3308;
$con = mysqli_connect("localhost","root","","testi_database",$port);
?>
<?php
session_start();
?>
<html>
<head>
    <title>DASHBOARD</title>
</head>
<style>
   ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;

}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 18px 20px;
  text-decoration: none;
}
.hopu{
  display: inline;
  color: white;
  text-align: center;
  padding: 10px 12px;
  text-decoration: none;
  background-color: #333;
  margin-top: 5px;
  margin-bottom: 0px;
}
li a:hover:not(.active) {
  background-color: #111;
}
button{
  background-color: #333;
  color: white;
  border: 0px solid #333;
  display: inline; 
}
button:hover{
  background-color: black;
}
.active {
  background-color: #4CAF50;
}
</style>
<body>
<?php
 $user = $_SESSION['user_mail'];
 $get_user = "SELECT * FROM   userregistration  WHERE  mailid='$user' ";
 $run_user = mysqli_query($con,$get_user);
 $row = mysqli_fetch_array($run_user);
 $userid1 = $row['userid'];
 $firname1 = $row['firstname'];
  $lasname1 = $row['lastname'];
  $birthday1 = $row['birthday'];
  $maili1 = $row['mailid'];
  $username1 = $row['username'];
  $pass1 = $row['passwords'];

 /*$user_posts = "SELECT * FROM posts WHERE user_id1='$userid1'";
  $run_posts = mysqli_query($con,$user_posts);
  $posts = mysqli_num_rows($run_posts); */
?>
<ul>
<li><a href="createinvitation.php">NEW INVITATION</a> </li>
<li><a href="createdinvitation.php ">CREATED INVITATIONS</a> </li>
<li><a href="acceptedpage.php">ACCEPTED INVITATIONS</a> <li>
<li><a href="pending.php">PENDING INVITATIONS</a> <li>

<li><a href="logout.php">LOG OUT</a> </li>
<li style="float:right"><a href=""> <?php
echo"$username1";
?></a> <li> 
</ul>

</body>

</html>