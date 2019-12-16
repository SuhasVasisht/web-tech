<!DOCTYPE html>
<html lang="en">
<head>
  <title>List of All Games</title>
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
<body>

<?php include('connect.php') ?>
<?php include("includes/header.php"); ?>



<div class="container"style="margin-top:60px" id="start">
</div>
<div class="row action">
    <div class="col">
    <h1 class="same-line" id="heading">List of All Games</h1>
    <div class="btn-group btn-group-toggle grid-system" data-toggle="buttons">
            <label id="grids" class="btn btn-dark active">
              <input type="radio"  name="options" id="option1" autocomplete="off" checked>Grid
            </label>
            <label id="singles" class="btn btn-dark">
              <input type="radio" name="options" id="option2" autocomplete="off">Single
            </label>
          </div> 
    <br><br><br>
    </div>
</div>
<div class="row">
    <div class="col-md-4 text1 text-center game ga1">
            <a href="game.php?game=assassin"><h3 class="text1 underline">Assasin's Creed Odyssey</h3></a>
            <a href="game.php?game=assassin"><img src="games/images/assas.jpg" class="img-fluid"></a>
            <br>
            <h4 class="money">&#8377;2499</h4>
            <br>
            <button id="assassin" type="submit" class="btn btn-dark">Add to Cart</button><br>
            Title: Assassin's Creed® Odyssey<br>
            Rating:<span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span><br>
            Genre: Adventure, Action, RPG<br>
            Developer: Ubisoft Quebec, Ubisoft Montreal<br>
            Publisher: Ubisoft<br>
            Franchise: Assassin's Creed<br>
            Release Date: 6 Oct, 2018<br>
            <br><br>
        </div>
    <div class="col-md-4 text1 text-center game ga2">
            <a href="game.php?game=rainbow"><h3 class="text1 underline">Rainbow Six Siege</h3></a>
            <a href="game.php?game=rainbow"><img src="games/images/rainbow.jpg" class="img-fluid"></a>
            <br>
            <h4 class="money">&#8377;1999</h4>
            <br>
            <button id="rainbow" type="submit" class="btn btn-dark">Add to Cart</button><br>
            Title: Tom Clancy's Rainbow Six® Siege<br>
            Rating:<span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star"></span><br>
            Genre: Action<br>
            Developer: Ubisoft Montreal<br>
            Publisher: Ubisoft<br>
            Release Date: 1 Dec, 2015<br>
            <br><br>
    </div>
    <div class="col-md-4 text1 text-center game ga1">
            <a href="game.php?game=witcher"><h3 class="text1 underline">Witcher 3:Wild Hunt</h3></a>
            <a href="game.php?game=witcher"><img src="games/images/witcher.jpg" class="img-fluid"></a>
            <br>
            <h4 class="money">&#8377;999</h4>
            <br>
            <button id="witcher" type="submit" class="btn btn-dark">Add to Cart</button><br>
            Title: The Witcher® 3: Wild Hunt<br>
            Rating:<span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star"></span><br>
            Genre: Adventure, RPG<br>
            Developer: CD PROJEKT RED<br>
            Publisher: CD PROJEKT RED<br>
            Release Date: 18 May, 2015
<br>
            <br><br>
    </div>
    <div class="col-md-4 text1 text-center game ga2">
        <a href="game.php?game=cod"><h3 class="text1 underline">Call of Duty:Modern Warfare</h3></a>
        <a href="game.php?game=cod"><img src="games/images/cod.jpg" class="img-fluid"></a>
        <br>
        <h4 class="money">&#8377;4699</h4>
        <br>
        <button id="cod" type="submit" class="btn btn-dark">Add to Cart</button><br>
        Title:Call of Duty:Modern Warfare<br>
        Rating:<span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star "></span>
               <span class="fa fa-star"></span><br>
        Genre: Action,FPS<br>
        Developers:  Infinity Ward, Raven Software, Beenox, High Moon Studios<br>
        Publisher: Activision<br>
        Release Date: 25 Oct, 2019<br>
        <br><br>
  </div>
  <div class="col-md-4 text1 text-center game ga2">
      <a href="game.php?game=cyberpunk"><h3 class="text1 underline">Cyberpunk 2077</h3></a>
      <a href="game.php?game=cyberpunk"><img src="games/images/cyberpunk.jpg" class="img-fluid"></a>
      <br>
      <h4 class="money">&#8377;2499</h4>
      <br>
      <button id="cyberpunk" type="submit" class="btn btn-dark">Add to Cart</button><br>
      Title: Cyberpunk 2077<br>
      Rating:<span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span><br>
      Genre: Action<br>
      Developer: CD Projekt Red<br>
      Publisher: CD Projekt<br>
      Release Date: 16 Apr, 2020<br>
      <br><br>
  </div>
  <div class="col-md-4 text1 text-center game ga2">
      <a href="game.php?game=lastofus"><h3 class="text1 underline">The Last of Us</h3></a>
      <a href="game.php?game=lastofus"><img src="games/images/lastofus.jpg" class="img-fluid"></a>
      <br>
      <h4 class="money">&#8377;949</h4>
      <br>
      <button id="lastofus" type="submit" class="btn btn-dark">Add to Cart</button><br>
      Title: The Last of Us<br>
      Rating:<span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span><br>
      Genre: Adventure,Survival<br>
      Developer: Naughty Dog<br>
      Publisher: Sony Computer Entertainment<br>
      Release Date: 1 Dec, 2015<br>
      <br><br>
  </div>
  <div class="col-md-4 text1 text-center game ga2">
      <a href="game.php?game=forza"><h3 class="text1 underline">Forza Horizon 4</h3></a>
      <a href="game.php?game=forza"><img src="games/images/forza.jpg" class="img-fluid"></a>
      <br>
      <h4 class="money">&#8377;2999</h4>
      <br>
      <button id="forza" type="submit" class="btn btn-dark">Add to Cart</button><br>
      Title: Forza Horizon 4<br>
      Rating:<span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span><br>
      Genre: Racing<br>
      Developers: Turn 10 Studios, Playground Games<br>
      Publisher: Microsoft Studios<br>
      Release Date: 12 Sep, 2018<br>
      <br><br>
  </div>
  <div class="col-md-4 text1 text-center game ga2">
      <a href="game.php?game=nfs"><h3 class="text1 underline">Need for Speed:Heat</h3></a>
      <a href="game.php?game=nfs"><img src="games/images/nfs.jpg" class="img-fluid"></a>
      <br>
      <h4 class="money">&#8377;3999</h4>
      <br>
      <button id="nfs" type="submit" class="btn btn-dark">Add to Cart</button><br>
      Title: Need for Speed:Heat<br>
      Rating:<span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span><br>
      Genre: Racing<br>
      Developer: Ghost Games<br>
      Publisher: Electronic Arts<br>
      Release Date: 8 Nov, 2019<br>
      <br><br>
  </div>
  <div class="col-md-4 text1 text-center game ga2">
      <a href="game.php?game=crew"><h3 class="text1 underline">The Crew 2</h3></a>
      <a href="game.php?game=crew"><img src="games/images/crew.jpg" class="img-fluid"></a>
      <br>
      <h4 class="money">&#8377;1699</h4>
      <br>
      <button id="crew" type="submit" class="btn btn-dark">Add to Cart</button><br>
      Title: The Crew 2<br>
      Rating:<span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span><br>
      Genre: Racing<br>
      Developers:  Ivory Tower, Asobo Studio<br>
      Publisher: Ubisoft<br>
      Release Date: 31 May, 2018<br>
      <br><br>
  </div>
  <div class="col-md-4 text1 text-center game ga2">
      <a href="game.php?game=fifa"><h3 class="text1 underline">Fifa 20</h3></a>
      <a href="game.php?game=fifa"><img src="games/images/fifa.jpg" class="img-fluid"></a>
      <br>
      <h4 class="money">&#8377;3499</h4>
      <br>
      <button id="fifa" type="submit" class="btn btn-dark">Add to Cart</button><br>
      Title: Fifa 20<br>
      Rating:<span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span><br>
      Genre: Sports,Football<br>
      Developer: Electronic Arts<br>
      Publisher: Electronic Arts<br>
      Release Date: 24 Sep, 2019<br>
      <br><br>
  </div>
  <div class="col-md-4 text1 text-center game ga2">
      <a href="game.php?game=nba"><h3 class="text1 underline">NBA 2K20</h3></a>
      <a href="game.php?game=nba"><img src="games/images/nba.jpg" class="img-fluid"></a>
      <br>
      <h4 class="money">&#8377;2997</h4>
      <br>
      <button id="nba" type="submit" class="btn btn-dark">Add to Cart</button><br>
      Title: NBA 2K20<br>
      Rating:<span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span><br>
      Genre: Sports,Simulation<br>
      Developer: Visual Concepts<br>
      Publisher: 2K Sports,2K Games<br>
      Release Date: 6 Sep, 2019<br>
      <br><br>
  </div>
  <div class="col-md-4 text1 text-center game ga2">
      <a href="game.php?game=madden"><h3 class="text1 underline">Madden NFL 20</h3></a>
      <a href="game.php?game=madden"><img src="games/images/madden.jpg" class="img-fluid"></a>
      <br>
      <h4 class="money">&#8377;3499</h4>
      <br>
      <button id="madden" type="submit" class="btn btn-dark">Add to Cart</button><br>
      Title: Madden NFL 20<br>
      Rating:<span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span><br>
      Genre: Sports<br>
      Developer: EA Tiburon<br>
      Publisher: Electronic Arts<br>
      Release Date: 14 Jun, 2019<br>
      <br><br>
  </div>
</div>


<script>
    var a=document.getElementsByClassName("game");
    document.getElementById("singles").addEventListener("click",single);
    document.getElementById("grids").addEventListener("click",grid);
    //console.log(a.length);
    function grid(){
        for(let i=0;i<a.length;i++)
        {
          if(i%2==0)
            a[i].className="col-md-4 text1 text-center game ga1";
          else
          a[i].className="col-md-4 text1 text-center game ga2";
            
        }
        
        
    }
    function single(){
        for(let i=0;i<a.length;i++)
        {
          if(i%2==0)
            a[i].className="col-md-12 text1 text-center game ga1";
          else
          a[i].className="col-md-12 text1 text-center game ga2";
            
        }
    }
    grid();

</script>
<script src="includes/fathersetter.js"></script>
</body>


</html>