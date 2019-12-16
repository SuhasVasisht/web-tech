<?php
$username=$_COOKIE['username'];
$sql="SELECT balance,purchase FROM users where username='$username'" ;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$balance=$row[0];
$history=$row[1];
?>