<html>
<head>
<title>FRONT PAGE</title>
</head>
<style>
h1{
    text-align: center;
    margin-top:20px;
  color: rgba(255, 166, 221, 0.952);
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;

}
 .newd {
    border: 5px solid black;
    width: 550px;
    height:330px;
    background-color: "black";
    color: "white";
    margin-left: 470px;
    margin-top: 200px;
    background-color: rgba(255, 166, 221, 0.952);
    background-image: radial-gradient(white, rgba(255, 166, 221, 0.952));
  box-shadow: 10px 10px 5px grey;
  padding-left: 20px;
  font-size: 16px;
}
body{

    background-image: radial-gradient( rgba(60, 81, 124, 0.952),white);
}
.firstone{
    margin-top:15px;
    font-size: 16px;
}
.secondone{
    margin-top:30px;
    font-size: 16px;
}
.button {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {opacity: 1}
</style>
<body>
    <h1>WELCOME TO MY WEBSITE</h1>
   
    <form action="loginasignin.php" method="POST">
    <div class="newd"><br>
   <h2> NEW USER:</h2> <button name="signup" class="firstone button">SIGNUP</button><br>
    <?php if(isset($_POST['signup'])){
        echo "<script>window.open('signup.php','_self')</script>";
    } ?>
   <h2> ALREADY HAVE AN ACCOUNT:</h2> <button class ="secondone button" name="signin"> SIGNIN</button>
    <?php if(isset($_POST['signin'])){
        echo "<script>window.open('signin.php','_self')</script>";
    } ?>
</div>    
</form>

</body>
</html>