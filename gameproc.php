<?php
$game=$_GET['game'];
$sql="SELECT * FROM games where id='$game'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);


// <meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1'>


$desc = fopen("games/text/$row[3]", "r");
$description=fread($desc,filesize("games/text/$row[3]"));
$rev = fopen("games/text/$row[15]", "r");
$review=fread($rev,filesize("games/text/$row[15]"));

switch($row[9]){
    case 0:$star1=$star2=$star3=$star4=$star5="unchecked";
            break;
    case 1:$star1="checked";
            $star2=$star3=$star4=$star5="unchecked";
            break;
    case 2:$star1=$star2="checked";
            $star3=$star4=$star5="unchecked";
            break;
    case 3:$star1=$star2=$star3="checked";
            $star4=$star5="unchecked";
            break;
    case 4:$star1=$star2=$star3=$star4="checked";
            $star5="unchecked";
            break;
    case 5:$star1=$star2=$star3=$star4=$star5="checked";
            break;

}

$title=$row[1];
$id=$row[2];
$coverimg=$row[4];
$cost=$row[5];
$car1=$row[6];
$car2=$row[7];
$car3=$row[8];
$genre=$row[10];
$developer=$row[11];
$publisher=$row[12];
$date=$row[13];
$reviewname=$row[14];
$youtube=$row[16];
?>