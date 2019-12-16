<!DOCTYPE html>
<html>
  <head>
      <head>
          <title>Login</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="common.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
          <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
        
          <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="Homepagestyle.css">
        </head>
  </head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing:border-box;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 2px solid #070707;
  margin-top: 20px;
  width: 80%;
}

.or{
    background: #1a1a1a;
    width: 30px;
    margin: -29px auto 20px;
    text-align: center;
}

button {
  border-radius: 25px;
  background-color: #070707;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
}

button.loginbtn{
  width:50%;
}


button:hover{
  background-color: lightblue;
  opacity: 1;
  color: black;
}

.small{
    font-size: small;
}

.center{
    margin: auto;
    width: 50%;
}

.container {
  background:linear-gradient(black,rgb(20, 20, 20);
  width: 600px;
  margin: 8% auto 0;
  padding: 20px;
  text-align: center;
}


</style>
<body style="background:linear-gradient(rgb(30,30,30),rgb(25,25,25));">
<?php include('connect.php') ?>
<?php include("includes/header.php"); ?>

    <div class="container"style="margin-top:80px" id="start">
      </div>
          <h1 class="display-3 text2 text-center" id="heading">Login</h1>
          <br><br>
          </div>

<form action="logincheck.php" method="post">
  <div class="container text1 text-center">
      
    <label for="emails">Enter Username</label><br>
    <input type="text" placeholder="Enter Username" name="usr" required><br>

    <label for="psw">Enter Password</label><br>
    <input type="password" placeholder="Password" name="psw" required><br>
    <div class="center">
      <div class="center"><button type="submit" class="loginbtn">Login</button></div>
    </div>
    <hr>
    <p class="or">OR</p>
    <br>
    <h4>Dont have an account? Create one now.</h4>
    <div class="clearfix">
            <a href="signup.php"><button type="button" class="loginbtn">Sign up</button></a>
    </div>
  </div>
  </div>
</form>
</body>
</html>