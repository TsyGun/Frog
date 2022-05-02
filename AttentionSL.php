<?php 

include_once "db.php";
require_once "auth\db.php";

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
<form class="d-flex">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success" type="submit">Search</button>
</form>
</nav>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  <h4 id="scrollspyHeading1"></h4>
  <p>
      <div class="footer">
        <div class="row">
            <div class="col">
                <div class="single-post">
                    <h4 class="post-category">ATTENTION</h4>
                    <h5 class="post-category">SL</h5>
                    <p>
                    Размер рамы:
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-secondary">14</button>
                    <button type="button" class="btn btn-secondary">16</button>
                    <button type="button" class="btn btn-secondary">17</button>
                    <button type="button" class="btn btn-secondary">19</button>
                    <button type="button" class="btn btn-secondary">21</button>
                    <button type="button" class="btn btn-secondary">23</button>
                    </div>
                    </p>
                    <p>
                    Размер колеса:
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-secondary">27.5</button>
                    <button type="button" class="btn btn-secondary">29</button>
                    </div>
                    </p>
                    <br>
                </div>
               
            </div>
            
        </div>
        <img class="ELITEC68X" src="/img-price/img-catalog/1.png">
    </div>
    <div class="footer-2">
    <div class="row">
  <div class="col-sm-6">
    <p class="text-ELITEC68X">
    Our updated Attention with the SL tag is built with all the canons of a modern, technological approach to sport mountain biking - a new 12-speed transmission without a front derailleur with a variable 10-51T cog cassette and first-class Deore-class crank system with outboard bearings, air fork and hydraulic disc brakes - all this mix on a lightweight aluminum frame of variable section tubes with mechanical molding for structural rigidity exactly where you need it. Integrated CIS trunk mounts, full-size ACID series fenders and CUBEstand footpegs give your Attention a variation in application. Now your attention should only be on the terrain! Your CUBE takes care of the rest.</p>
    </div>
    <div class="col-sm-2">
    <p class="text-ELITEC68X">
        <h5 class="post-category">Item:</h5> 403160
    </p>
    </div>
    <div class="col-sm-3">
    <p class="text-ELITEC68X">
        <h5 class="post-category">Frame dimensions:</h5><br>14"/27.5/XS, 16"/27.5/S, 17"/29/M, 19"/29/L, 21"/29/XL, 23"/29/XXL
    </p>
    </div>
    </div>
    </div>
    
</p>
  <div class="container">
  <h4 id="scrollspyHeading2"></h4>
  <h4 class="post-category mb100">Equipment</h4>
  <hr>
  <div class="row">
    <div class="col-sm-8">
    <div class="container">
  <div class="row g-2">
    <div class="col-10">
      <div class="p-3 border bg-light">   
      <i class="fa-solid fa-circle-plus"></i>
      <table class="table">
  <thead>
<table>
    <tr>
      <td>Rims</td>
      <td>CUBE ZX20, 32H, Disc</td>
    </tr>
    <tr>
      <td>Front hub</td>
      <td>Shimano HB-M4050, QR, Centerlock</td>
    </tr>
    <tr>
      <td>Rear hub</td>
      <td>	Shimano FH-MT401, QR, Centerlock</td>
    </tr>
    <tr>
      <td>Rudder</td>
      <td>	CUBE Rise Trail Bar, 680mm</td>
    </tr>
    <tr>
      <td>Grips</td>
      <td>	CUBE Performance Grip</td>
    </tr>
    <tr>
      <td>Takeaway</td>
      <td>	CUBE Performance Stem SL, 31.8mm</td>
    </tr>
    <tr>
      <td>Saddle</td>
      <td>Natural Fit Venec Lite</td>
    </tr>
    <tr>
      <td>Seatpost</td>
      <td>CUBE Performance Post, 27.2mm</td>
    </tr>
    <tr>
      <td>Suspension clamp</td>
      <td>CUBE Varioclose, 31.8mm</td>
    </tr>
    <tr>
      <td>Chain</td>
      <td>Shimano CN-M6100</td>
    </tr>
    <tr>
      <td>Cassette</td>
      <td>	Shimano Deore CS-M6100, 10-51T</td>
    </tr>
    <tr>
      <td>Pedals</td>
      <td>CUBE PP MTB</td>
    </tr>
    <tr>
      <td>Steering column</td>
      <td>CUBE FPH863, Semi-Integrated</td>
    </tr>
        </thead>
</table>
<hr>
<i class="fa-solid fa-crop"></i> 
<table class="table">
  <thead>
  <table>
    <tr>
      <td>Frame</td>
      <td>Aluminium Lite, AMF, Internal Cable Routing, Easy Mount Kickstand Ready</td>
    </tr>
    <tr>
      <td>Frame size</td>
      <td>14"/27.5/XS, 16"/27.5/S, 17"/29/M, 19"/29/L, 21"/29/XL, 23"/29/XXL</td>
    </tr>

    <tr>
      <td>Color</td>
      <td>petrol´n´red</td>
    </tr>
    <tr>
      <td>Fork</td>
      <td>RockShox Judy Silver TK AIR, 100mm, PopLoc</td>
    </tr>
        </thead>
</table>
<hr>
<i class="fa-solid fa-sliders"></i>
<table class="table">
  <thead>
  <table>
    <tr>
      <td>System</td>
      <td>	Shimano FC-MT511, 32T, Boost</td>
    </tr>
    <tr>
      <td>Brakes</td>
      <td>	Shimano BR-MT200, Hydr. Disc Brake (180/160)</td>
    </tr>

    <tr>
      <td>Rear derailleur</td>
      <td>Shimano XT RD-M8100-SGS, ShadowPlus, 12-Speed</td>
    </tr>
    <tr>
      <td>Shifters</td>
      <td>Shimano Deore SL-M6100, Rapidfire-Plus</td>
    </tr>
    <tr>
      <td>Front tire</td>
      <td>Schwalbe Smart Sam, Active, 2.25</td>
    </tr>
    <tr>
      <td>Rear tire</td>
      <td>Schwalbe Smart Sam, Active, 2.25</td>
    </tr>
        </thead>
</table>
<hr>
<i class="fa-solid fa-weight-hanging"></i>

    <thead>
    <table>
    <tr>
      <td>13.5 kg</td>
    </tr>
    </thead>
</table>
</div>
    </div>
  </div>
</div>
    </div>
    <div class="col-sm-4">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators carousel-indicators-2">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">Info</button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">14"</button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">16"</button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4">17"</button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5">18"</button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6">19"</button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7">21"</button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8">23"</button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item carousel-item-2 active">
      <img src="/img-price/img-catalog/car11.png" class="d-block-2 d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car111.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car112.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car113.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car114.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car115.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car116.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car117.png" class="d-block w-100" alt="...">
    </div>
  </div>
    </div>
  </div>
</div>
</p>
  <h4 id="scrollspyHeading3"></h4>
  <p>
  <h4 id="scrollspyHeading2"></h4>
  <h4 class="post-category mb100">Details</h4>
  <hr>
  <div class="text-center -background-secondary-color mod-content-image skin-content-image-video content-image-video-caption figcaption">
            <img width="690px" height="480px" src="https://www.cuberussia.ru/f/product/w690_20_403160_attention_sl_details_2.jpg" />
        </div>
        <div class="row">
            <div class="col">
                <div class="single-post">
                <p class="text-ELITEC68X">
                The lightweight frame made of proprietary HPA Lite aluminum from mechanically molded AMF double-battened tubes, with a semi-integrated steering column and internal cable routing is designed to all Agile Ride geometry standards - for excellent maneuverability and "bike feel. The Attention SL package is now as level as the competition: a new Judy Silver air fork with "blackened" legs from RockShox with 100mm of soft travel and a remote PopLoc handlebar locking shifter; a modern, variable 12-speed Shimano XT drivetrain with ShadowPlus rear derailleur and 10-51T cassette - for more versatility in a variety of conditions; hydraulic brakes with 180mm rotors up front - for control when braking. Choose between bright, glossy "sky" with red accents or classic black color options.                </p>
                    <br>
                </div>
            </div>
        </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
  </div>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item carousel-item-3 active">
      <img src="/img-price/img-catalog/carousel-21.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-3">
      <img src="img-price/img-catalog/carousel-22.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </p>
  <h4 id="scrollspyHeading4"></h4>
  <p>
      
      <div class="footer-3">
      <div class="single-post">
                    <h4 class="post-category">OTHER MODELS IN THIS SERIES</h4>
                    </div>
                    <hr>
                <div class="row row-2">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <a href="#"><img src="https://www.cuberussia.ru/f/product/w352_26_415100_reaction_tm.jpg"></img></a>
        <a href="#" aligin="right">REACTION TM</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <a href="#"><img src="https://www.cuberussia.ru/f/product/w352_29_416100_reaction_c62_pro.jpg"></img></a>
        <a href="#" aligin="right">REACTION C:62 PRO</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <a href="#"><img src="https://www.cuberussia.ru/f/product/w352_25_412110_reaction_pro.jpg"></img></a>
        <a href="#" aligin="right">REACTION PTO</a>
      </div>
    </div>
  </div>
</div>

                </div>
            </div>
        </div>
    </p>
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