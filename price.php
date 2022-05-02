<?php 

include_once "db.php";
require_once "auth/db.php";

?>
<!doctype html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Source+Serif+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>froog</title>
</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">Froog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/home.php">Home</a>
        <a class="nav-link" href="/features.php">Features</a>
        <a class="nav-link" href="/price.php">Pricing</a>
        <?php if( isset($_SESSION['logged_user']) ) : ?>
           <div class="nav-link">Hello,&nbsp;<?php echo $_SESSION['logged_user']->login; ?>!</div>
            <hr>
        <a class="nav-link" href="/auth/logout.php">Log&nbsp;out</a>
        <?php else : ?>
            <div class="nav-link">You&nbsp;are&nbsp;not&nbsp;logged&nbsp;in</div>
        <a class="nav-link" href="auth/login.php">Login</a>
        <a class="nav-link" href="auth/signup.php">Signup</a>
        <?php endif; ?>
        <a class="nav-link disabled">Disabled</a>
<div class="container-fluid">
</div>
</div>
</div>
</div>
<form class="d-flex" method="POST" action="searchResult.php">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
<button class="btn btn-outline-success" type="submit" name="submit">Search</button>
</form>
</nav>
<main>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img bg-fon" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <image xlink:href="/img-price/Без-имени-1.png" />
          </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Hardtail's bike.</h1>
                            <p>A type of bicycle frame that has no rear suspension.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img bg-fon" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <image   xlink:href="/img-price/Без-имени-2.png"/>
          </svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Dirt Jump bike.</h1>
                            <p>Type of bicycle frame with no rear suspension and a low frame.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img bg-fon" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <image  xlink:href="/img-price/Без-имени-3.png"/>
          </svg>
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Two-saddle.</h1>
                            <p>A mountain bike that has shock absorption on both wheels, <br> as opposed to a hardtail, which only has shock absorption on the front wheel.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        </main>

        <div class="footer">
        <div class="single-post">
            <h4 class="post-category">Bike</h4>
            <h2 class="post-title">Hardtail</h2>
        <?php include_once "price-carousel-hardteil.php" ?>
        </div>
         
        <div class="single-post">
            <h4 class="post-category">Bike</h4>
            <h2 class="post-title">Dirt</h2>
        <?php include_once "price-carousel-dirt.php" ?>
        </div>
        
        <div class="single-post">
            <h4 class="post-category">Bike</h4>
            <h2 class="post-title">Two saddle</h2>
        <?php include_once "price-carousel-Two.php" ?>
        </div>

        </div>
        <footer>
        <div class="container">
            <div class="d-sm-flex justify-content-between">
                <div class="footer-left">
                    <a href="#">Terms and conditions</a>
                    <a href="#">Privac</a>
                </div>
                <div class="footer-right">
                    <span>Follow</span>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/48964e9e83.js" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        </body>
    </html>