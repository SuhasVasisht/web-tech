<html>
<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
<body style="background:linear-gradient(rgb(30,30,30),rgb(25,25,25));font-family: 'Staatliches'">
<?php

include("connect.php");


$username=$_POST['usr'];
$password=$_POST['psw'];

$sql="SELECT username,passwords FROM users where username='$username' AND passwords='$password'" ;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row){
    $mess="Login successful,redirecting you to main page";
    $redir='<meta http-equiv="refresh" content="3;index.php">';
    setcookie("username", $username);
    setcookie("logstat", "hello");
}
else{
    $mess="Username or password was wrong,please try again";
    $redir='<meta http-equiv="refresh" content="3;signin.php">';
}
echo $redir;

?>
<div class="row"><div class="col">
<h2 style="color:white;"><?php echo $mess; ?></h2>
</div></div>
</body>
</html>