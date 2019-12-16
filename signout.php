<?php
    setcookie("username", "aa",time()-60);
    setcookie("logstat", "hello",time()-60);
    $link=$_SERVER['HTTP_REFERER'];
    if(strpos($link, "balance.php")||strpos($link,"history.php")){
        header("Location:signin.php");
    }
    else{
        header("Location:".$link);
    }
?>