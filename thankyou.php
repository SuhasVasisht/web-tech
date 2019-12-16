<html>
<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
<body style="background:linear-gradient(rgb(30,30,30),rgb(25,25,25));font-family: 'Staatliches'">


<?php
require("connect.php");

   
$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
   



$sql="INSERT INTO users(username,email,passwords,balance) VALUES ('$username','$email','$pass',0)";
if (mysqli_query($conn, $sql)) {
   $mess='Thank you for registering<br>Redirecting you to sign in';
   $redir='<meta http-equiv="refresh" content="3;signin.php">';
   
      
} else {
      $mess="Oops..Looks like the username or the email id is already taken<br>Redirecting you to sign up";
      $redir='<meta http-equiv="refresh" content="3;signup.php">';
   
   }
echo $redir;
   




?>
<div class="row"><div class="col">
<h2 style="color:white;"><?php echo $mess; ?></h2>
</div></div>
</body>
</html>