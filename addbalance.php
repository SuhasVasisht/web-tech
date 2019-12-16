<?php
include("connect.php");
include("includes/balandhist.php");
$newbal=$balance+10000;
$sql="UPDATE users SET balance='$newbal'  where username='$username'" ;
$result=mysqli_query($conn,$sql);
echo $newbal;   
header("Location:balance.php");
?>