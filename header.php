
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="#" style="font-family: 'Staatliches', cursive; color: rgb(28, 52, 160);">The Cartel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php" style="color: lightblue;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="browse.php" style="color: lightblue;">Browse</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: lightblue;">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="category.php?category=action">Action</a>
            <a class="dropdown-item" href="category.php?category=adventure">Adventure</a>
            <a class="dropdown-item" href="category.php?category=racing">Racing</a>
            <a class="dropdown-item" href="category.php?category=sports">Sports</a>
            <a class="dropdown-item" href="indie.php">Indie</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="allgames.php">List of All Games</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true" style="color: lightblue;">About Us</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
        <input class="form-control" name="findit" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
      </form>
      <?php 
      if (isset($_COOKIE["logstat"])){ ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: lightblue;">
           <?php echo $_COOKIE['username']; ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="balance.php">View Balance</a>
            <a class="dropdown-item" href="history.php">Purchase History</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="signout.php">Sign out</a>
          </div>
        </li>
      <?php } else { ?> 
        
        <li class="nav-item">
          <a class="nav-link" href="signin.php" tabindex="-1" aria-disabled="true" style="color: lightblue;">Sign in</a>
        </li>
      <?php } ?>

      <li class="nav-item">
          <a class="nav-link" href="cart.php" style="color: lightblue;">View Cart</a>
      </li>
      </ul>
    </div>
  </nav>