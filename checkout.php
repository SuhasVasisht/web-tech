<html>
<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
<body style="background:linear-gradient(rgb(30,30,30),rgb(25,25,25));font-family: 'Staatliches'">


<?php
require("connect.php");
include("includes/balandhist.php");
$purchase=$_POST["purchase"];
$username=$_COOKIE["username"];
$js="";
if($balance>=$purchase){
    if($purchase!=0){
        $newbal=$balance-$purchase;
        $history=$history.$_POST["history"];
        $sql="UPDATE users SET balance='$newbal',purchase='$history'  where username='$username'" ;
        mysqli_query($conn, $sql);
    }
    $mess='Thank you for your purchase.<br>Redirecting you to home';
    $redir='<meta http-equiv="refresh" content="3;index.php">';
    echo '<script type="text/javascript">
        var ids=["assassin","witcher","rainbow","cod","cyberpunk","lastofus","forza","nfs","crew","fifa","nba","madden"];
        var x;
        var i=0;
        for(x of ids)
        {   
            localStorage.setItem(x,"0");
            console.log(x);
        }
        

                
    </script>';

}
else{
    $mess="Insufficient balance<br>Redirecting you to add balance";
    $redir='<meta http-equiv="refresh" content="3;balance.php">';

}


   

   




echo $redir;
echo $js;




?>
<div class="row"><div class="col">
<h2 style="color:white;"><?php echo $mess; ?></h2>
</div></div>
</body>
</html>