<!DOCTYPE html>
<html lang="en">
<head>
<?php include("includes/header.php"); ?>
<?php include("connect.php");?>
<?php include("includes/gameproc.php");?>
  <title><?php echo $title?></title>
  <?php //header("Content-Type: text/html; charset=ISO-8859-1"); ?>
  <meta charset="ISO-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="common.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Homepagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>




<div class="container"style="margin-top:60px" id="start">
</div>
<div class="row">
    <div class="col">
    <h1 id="heading"><?php echo $title?></h1> 
    </div>
</div>






<div class="row ">
    <div class="col-lg-8 back my-auto" style="color:rgb(219, 226, 210)" >
    <?php echo $description?>
    </div>
    <div class="col-lg-4 back text-center"><img src="Games/Images/<?php echo $coverimg?>" class="img-fluid">
    <br>
    <h4 class="money">&#8377;<?php echo $cost?></h5>
     <br>
    <div class="btn-group">
        <button type="button" class="btn btn-light" id="adder">+</button>
        <button type="button" class="btn counts" id="counts"></button>
         <button type="button" class="btn btn-light" id="subt">-</button>
         <button type="submit" class="btn btn-dark" id="change">Add to Cart</button>
      </div>
    </div>
</div>
<br>    
<div class="row ">
    <div class="col-md-1">

      </div>
    <div class="col-md-6" id="car-img">
        <div id="cars" class="carousel slide" data-ride="carousel">

            <ul class="carousel-indicators">
              <li data-target="#cars" data-slide-to="0" class="active"></li>
              <li data-target="#cars" data-slide-to="1"></li>
              <li data-target="#cars" data-slide-to="2"></li>
            </ul>
          
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Games/Images/<?php echo $car1?>" class="car-img" alt="First">
              </div>
              <div class="carousel-item">
                <img src="Games/Images/<?php echo $car2?>"  class="car-img"alt="Second">
              </div>
              <div class="carousel-item">
                <img src="Games/Images/<?php echo $car3?>" class="car-img"  alt="Third">
              </div>
            </div>
          
            <a class="carousel-control-prev" href="#cars" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#cars" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          
          </div>
    </div>
    <div class="col-md-1">

    </div>
    <div class="col-md-4 back" style="color:rgb(219, 226, 210)" >
        Title: <?php echo $title?><br>
        Rating:<span class="fa fa-star <?php echo $star1?>"></span>
               <span class="fa fa-star <?php echo $star2?>"></span>
               <span class="fa fa-star <?php echo $star3?>"></span>
               <span class="fa fa-star <?php echo $star4?>"></span>
               <span class="fa fa-star <?php echo $star5?>"></span><br>
        Genre: <?php echo $genre?><br>
        Developer: <?php echo $developer?><br>
        Publisher: <?php echo $publisher?><br>
        Release Date: <?php echo $date?><br>
        
    </div>
    
    </div>
    <br><br>
</div>
<div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-8">
    <h1 class="display-4 text1 ">Trusted Reviews</h1>&nbsp; &nbsp;<a href="#next" class="skippy" >skip&#8595;</a>
      <ul class="nav nav-tabs">
          <li class="nav-item">
              <a href="#home" class="nav-link active text1" data-toggle="tab">
              <?php echo $reviewname?>
              </a>
          </li>
      </ul>
      <div class="tab-content">
          <div class="tab-pane fade show active text2" id="home">
              <p>
                  <blockquote class="blockquote">
                  <?php echo $review?>
                      
                      <footer class="blockquote-footer"><?php echo $reviewname?></footer>
                  </blockquote>
              </p>
          </div>
          
      </div>
        
  </div>
  <div class="col-md-3">
  </div>
</div>
<br><br>
<div class="row" id="next">
  <div class="col-md-2">
    
  </div>
  <div class="col btn-custom" style="background:transparent">
    <h2>Gameplay</h2>
  </div>
</div>
<div class="row">
  <div class="col-md-2">

  </div>
  <div class="col-md-8">
      <div class="embed-responsive embed-responsive-16by9">
      <?php echo $youtube?>
          </div>
  </div>
  <div class="col-md-2">

  </div>
</div>
<br>
<div class="container"> 
<a href="#start" class="skippy text-center" >back to top&#8593;</a>
</div>
<br>

<script>
  var x;
    if(localStorage.getItem("<?php echo $id?>")==""||localStorage.getItem("<?php echo $id?>")=="0")
      x=1;
    else
      x=Number(localStorage.getItem("<?php echo $id?>"))
      
    var a=document.getElementById("counts");
    a.innerHTML=x;
    document.getElementById("adder").addEventListener("click",
    function(){
      x=x+1;
      
      a.innerHTML=x;
    }
    );
    document.getElementById("subt").addEventListener("click",
    function(){
      if(x!=1){
        x=x-1;
      }
      
      a.innerHTML=x;
    }
    );
    document.getElementById("change").addEventListener("click",
    function(){
      localStorage.setItem("<?php echo $id?>",String(x));

    });

  </script>


</body>
</html>


