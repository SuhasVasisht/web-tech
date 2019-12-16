<?php
$query=$_POST['findit'];
$query=strtolower($query);
$sql1="SELECT title FROM games";
$result1=mysqli_query($conn,$sql1);
$col=array();
$found=array();
while($games=mysqli_fetch_array($result1)){
    array_push($col,$games[0]);
}
foreach ($col as $value){ 
    $temp1=strtolower($value);
    if(strpos(' '.$temp1, $query)){
        array_push($found,$value);
    }  
  }

$allgames="";
for($i=0;$i<sizeof($found);$i++){

    $sql="SELECT * FROM games where title='$found[$i]'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
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
    $genre=$row[10];
    $developer=$row[11];
    $publisher=$row[12];
    $date=$row[13];
    
    $temp='<div class="col-md-4 text1 text-center game ga1">
    <a href="game.php?game='.$id.'"><h3 class="text1 underline">'.$title.'</h3></a>
    <a href="game.php?game='.$id.'"><img src="games/images/'.$coverimg.'" class="img-fluid"></a>
    <br>
    <h4 class="money">&#8377;'.$cost.'</h4>
    <br>
    <button id="'.$id.'" type="submit" class="btn btn-dark">Add to Cart</button><br>
    Title: '.$title.'<br>
    Rating:<span class="fa fa-star '.$star1.'"></span>
           <span class="fa fa-star '.$star2.'"></span>
           <span class="fa fa-star '.$star3.'"></span>
           <span class="fa fa-star '.$star4.'"></span>
           <span class="fa fa-star '.$star5.'"></span><br>
    Genre: '.$genre.'<br>
    Developer: '.$developer.'<br>
    Publisher: '.$publisher.'<br>
    Release Date: '.$date.'<br>
    <br><br>
</div>';
$allgames=$allgames.$temp;
}
if($allgames==""){
    $allgames="<div class='row'><div class='col-md-12'><h1 class='display3 text2'>&nbsp;&nbsp;Sorry..no results found</h1></div></div>";
}

?>