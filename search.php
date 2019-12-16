<html>
    <head>
  <title>Search</title>
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
    <link rel="stylesheet" href="Homepagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('connect.php') ?>
    <?php include("includes/header.php"); ?>
    <?php include("includes/searchproc.php");?>
    
    <div class="container"style="margin-top:60px" id="start">
    </div>
    <div class="row action">
    <div class="col">
        <h1 class="same-line" id="heading">Results</h1>
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
        <?php echo $allgames?>
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