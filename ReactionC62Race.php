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
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  <h4 id="scrollspyHeading1"></h4>
  <p>
      <div class="footer">
        <div class="row">
            <div class="col">
                <div class="single-post">
                    <h4 class="post-category">REACTION C:62</h4>
                    <h5 class="post-category">RACE</h5>
                    <p>
                    Размер рамы:
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-secondary">15</button>
                    <button type="button" class="btn btn-secondary">17</button>
                    <button type="button" class="btn btn-secondary">19</button>
                    <button type="button" class="btn btn-secondary">21</button>
                    <button type="button" class="btn btn-secondary">23</button>
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
    Before naming the CUBE version with the "Race" index, we have to be completely convinced - you can take your new CUBE to any level of race. Constructed from the patented C:62 hi-end carbon material, this lightweight and stiff Reaction C:62 Race is the epitome of the experience our engineering team has gained in creating carbon frames. Technologically advanced and incredibly responsive construction - a short rear triangle and boost 148-format bushings give this bike incredible dynamics and handling. Tapered top feathers and 27.2mm seatpost allow the frame to absorb the small irregularities in the terrain, adding comfort for long workouts. The integrated steering column and threadless PressFit carriage are designed to combat excess weight, and internal wiring of cables and hydraulic lines will keep shifting precision without maintenance after muddy rides.
A pair of colors to choose from - bright, trendy blue with retro-style tires or timeless black & white classics.</p>
    </div>
    <div class="col-sm-2">
    <p class="text-ELITEC68X">
        <h5 class="post-category">Item:</h5> 416300
    </p>
    </div>
    <div class="col-sm-3">
    <p class="text-ELITEC68X">
        <h5 class="post-category">Frame dimensions:</h5> 15"/29/S, 17"/29/M, 19"/29/L, 21"/29/XL, 23"/29/XXL
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
      <td>Rudder</td>
      <td>Newmen Evolution 318.10, 720mm</td>
    </tr>
    <tr>
      <td>Grips</td>
      <td>CUBE Race SL Grip 29.5mm, 1-Clamp</td>
    </tr>
    <tr>
      <td>Takeaway</td>
      <td>Newmen Evolution 318.4, 31.8mm</td>
    </tr>
    <tr>
      <td>Saddle</td>
      <td>Natural Fit Nuance Lite</td>
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
      <td>Seatpost</td>
      <td>Newmen Advanced Custom, Carbon, 27.2mm</td>
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
      <td>C:62 Monocoque Advanced Twin Mold Technology, ARG2, Tapered Headtube, PressFit BB, Boost 12x148mm, Integrated Cable Routing, Dropper Post Ready</td>
    </tr>
    <tr>
      <td>Frame size</td>
      <td>15"/29/S, 17"/29/M, 19"/29/L, 21"/29/XL, 23"/29/XXL</td>
    </tr>

    <tr>
      <td>Color</td>
      <td>carbon´n´white</td>
    </tr>
    <tr>
      <td>Fork</td>
      <td>Fox 32 Float SC FIT4 Performance, Tapered, 15x110mm, 100mm, 2-Position Remote Lever</td>
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
      <td>Shimano Deore FC-M6100-1, Boost, 32T</td>
    </tr>
    <tr>
      <td>Brakes</td>
      <td>Shimano XT BR-M8100, Hydr. Disc Brake (180/160)</td>
    </tr>

    <tr>
      <td>Rear derailleur</td>
      <td>Shimano XT RD-M8100-SGS, ShadowPlus, 12-Speed</td>
    </tr>
    <tr>
      <td>Shifters</td>
      <td>Shimano Deore SL-M6100-I, Direct Attach, Rapidfire-Plus</td>
    </tr>
    <tr>
      <td>Wheels</td>
      <td>Answer Attack AM, 15x110mm/12x148mm, Tubeless-Ready</td>
    </tr>
    <tr>
      <td>Front tire</td>
      <td>Schwalbe Racing Ray, Addix Performance, Kevlar, 2.25</td>
    </tr>
    <tr>
      <td>Rear tire</td>
      <td>Schwalbe Racing Ralph, Addix Performance, Kevlar, 2.25</td>
    </tr>
        </thead>
</table>
<hr>
<i class="fa-solid fa-weight-hanging"></i>

    <thead>
    <table>
    <tr>
      <td>10.6 kg</td>
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
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">16"</button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">18"</button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4">20"</button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5">22"</button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item carousel-item-2 active">
      <img src="/img-price/img-catalog/car11.png" class="d-block-2 d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car12.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car13.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car14.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car15.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car16.png" class="d-block w-100" alt="...">
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
            <img width="690px" height="480px" src="https://www.cuberussia.ru/f/product/w690_31_416300_reaction_c62_race_details_1.jpg" />
        </div>
        <div class="row">
            <div class="col">
                <div class="single-post">
                <p class="text-ELITEC68X">
                    High-tech frame made of patented carbon material C:68X - fully carbon, ultra-light and stiff, strong and responsive; with cone steering stem, for PressFit carriage and 12mm boost 148 standard rear axle; with special ARG2 geometry; with preparation for adjustable seatpost; with internal wiring of cables and hydraulic lines. Elite C:68X SL - the choice of professional team riders - the ultralight niner with perfected 12-speed drivetrain and XTR brakes from Shimano; with FOX Factory Kashima suspension fork with remote 2-position locking on the handlebar; on hand assembled carbon fork "on axles" in boost format from NEWMEN with racing kevlar tubeless Schwalbe Super Race series. This is perfection in the signature TEAMLINE colorway.
                </p>
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
      <img src="/img-price/img-catalog/carousel-11.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-3">
      <img src="img-price/img-catalog/carousel-12.png" class="d-block w-100" alt="...">
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

<?php include_once "script.php" ?>
</body>