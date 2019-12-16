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
        <?php include("includes/balandhist.php") ?>
        <div class="container" style="margin-top:60px"></div>  
        <div class="row"><div class="col">
        <h1 class="display1 text1">Your purchase history:</h1>
        </div></div>
        <?php
            $arr=explode(";",$history);
            foreach ($arr as $value){
                echo '<div class="row"><div class="col">
                <h2 class="display1 text1">'.$value.'</h2>
                </div></div>';
                
            }

        ?>
        

    </body>
</html>