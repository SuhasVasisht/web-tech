<!DOCTYPE html>
<html lang="en">
<head>
  <title>Indie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="common.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

  

  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Homepagestyle.css">
</head>
<body>
<?php include("includes/header.php") ?>



<div class="container"style="margin-top:60px" id="start">
</div>
<div class="row action">
    <div class="col">
    <h1 class="same-line" id="heading">Indie</h1>
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
    
    <div class="col-md-4 text1 text-center game ga2">
            <a href="indie/antibac/Antibiotic.html"><h3 class="text1 underline">Anti-Bac-Battle</h3></a>
            <a href="indie/antibac/Antibiotic.html"><img src="games/images/Image_AntiBac.jpg" class="img-fluid"></a>
            <br>
            <!--<h4 class="money">&#8377;1999</h4>-->
            <br>
           <!-- <button id="antibac"  class="btn btn-dark" href="Antibiotic.html">Free to Play</button><br>-->
            Title: Anti Bac Battle<br>
            Rating:<span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star"></span><br>
            Genre: Indie<br>
            Developer: Shashank Studios<br>
            Publisher: The Cartel<br>
            Release Date: 1 Dec, 2015<br>
            <br><br> 
    </div>
    
    <div class="col-md-4 text1 text-center game ga2">
        <a href="indie/lowpoly/LPE.html"><h3 class="text1 underline">Low Poly Environment Walkthrough</h3></a>
        <a href="indie/lowpoly/LPE.html"><img src="games/images/LPE_image.jpg" class="img-fluid"></a>
        <br>
        <!--<h4 class="money">&#8377;0</h4>-->
        <br>
       <!---<button id="lpe" href="LPE.html" class="btn btn-dark">Free to playt</button><br>-->
        Title:Low Poly Environment Walkthrough<br>
        Rating:<span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star "></span>
               <span class="fa fa-star"></span><br>
        Genre:Walkthrough<br>
        Developers:  Shashank Studios<br>
        Publisher: The Cartel<br>
        Release Date: 17 Nov, 2019<br>
        <br><br>
  </div>
  <div class="col-md-4 text1 text-center game ga2">
    <!--  <a href="#"><h3 class="text1 underline">Cyberpunk 2077</h3></a>
      <a href="#"><img src="gamepics/cyberpunk.jpg" class="img-fluid"></a>
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
      <br><br>-->
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
<script src="fathersetter.js"></script>
</body>


</html>