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
                    <h4 class="post-category">AMS 100 C:68</h4>
                    <h5 class="post-category">SLT 29</h5>
                    <p>
                    Размер рамы:
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-secondary">L</button>
                    <button type="button" class="btn btn-secondary">M</button>
                    <button type="button" class="btn btn-secondary">S</button>
                    <button type="button" class="btn btn-secondary">XL</button>
                    </div>
                    </p>
                    <br>
                </div>
               
            </div>
            
        </div>
        <img class="ELITEC68X" src="https://www.cuberussia.ru/f/product/w1440_462_452400_ams_100_c68_slt_29.jpg">
    </div>
    <div class="footer-2">
    <div class="row">
  <div class="col-sm-6">
    <p class="text-ELITEC68X">
    Made it to the top level of the big sport? It's clear that you need the coolest CUBE you can make. That's why we have the AMS 100 C:68 SLT 29 niner, to get you a few more pedal turns closer to the podium. How do we do that? Very simple. We took our proven 4-lever suspension geometry, put it together with an ultra-stiff frame made of patented C:68 carbon material, and then taught it to ride properly by outfitting the bike with the best suspension solutions from the big name FOX. Then we equipped with the coolest components: the best 12-speed Sram XX1 Eagle AXS with wireless gear shift, carbon cockpit, wheels and saddle from NEWMEN, painted in strict mat color with prismatic color accents - the winning bike is ready! Weighing less than 10 kg, this two-passenger machine is loaded with hidden energy to the max! The fastest, lightest, most efficient and reliable race CUBE for competition and cross country marathons we've ever seen. Sram's Rainbow Series chain and cassette are compliments of our design team. Strictly limited in production.    </div>
    <div class="col-sm-2">
    <p class="text-ELITEC68X">
        <h5 class="post-category">Item:</h5> 452400
    </p>
    </div>
    <div class="col-sm-3">
    <p class="text-ELITEC68X">
        <h5 class="post-category">Frame dimensions:</h5><br>29: S, M, L, XL
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
      <td>Rear shock absorber</td>
      <td>Fox Float DPS Factory Remote, 165x38mm, 2-Position Remote, Kashima Coated</td>
    </tr>
    <tr>
      <td>Shock absorber dimensions</td>
      <td>Front: 30x8mm, Rear: 30x8mm</td>
    </tr>
    <tr>
      <td>Rudder</td>
      <td>Newmen Advanced SL 318.0, Carbon, 740mm</td>
    </tr>
    <tr>
      <td>Grips</td>
      <td>CUBE Race SL Grip 29.5mm, 1-Clamp</td>
    </tr>
    <tr>
      <td>Takeaway</td>
      <td>	Newmen Evolution SL 318.2, 31.8mm</td>
    </tr>
    <tr>
      <td>Saddle</td>
      <td>Natural Fit Nuance SLT Carbon</td>
    </tr>
    <tr>
      <td>Seatpost</td>
      <td>	Newmen Advanced SL, Carbon, 31.6mm</td>
    </tr>
    <tr>
      <td>Suspension clamp</td>
      <td>CUBE Screwlock, 34.9mm</td>
    </tr>
    <tr>
      <td>Chain</td>
      <td>	Sram PC-XX1 Eagle™ Rainbow</td>
    </tr>
    <tr>
      <td>Cassette</td>
      <td>	Sram XG-1299 Rainbow, 10-52T</td>
    </tr>

    <tr>
      <td>Steering columnn</td>
      <td>VP Integrated, Top 1 1/8", Bottom 1 1/2"</td>
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
      <td>C:68 Monocoque Advanced Twin Mold Technology, ARG, ERC, FSP 4-Link, Boost 148, AXH</td>
    </tr>
    <tr>
      <td>Frame size</td>
      <td>	29: S, M, L, XL</td>
    </tr>

    <tr>
      <td>Color</td>
      <td>	carbon´n´prizmblack</td>
    </tr>
    <tr>
      <td>Fork</td>
      <td>	Fox 32 SC Float Factory FIT4, 2-Position Remote, Tapered, 15x110mm, 100mm, Kashima Coated</td>
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
      <td>	Sram XX1 Eagle™ DUB, 32T, 175mm (170mm for size S)</td>
    </tr>
    <tr>
      <td>Brakes</td>
      <td>	Sram Level Ultimate Rainbow, Hydr. Disc Brake (160/160)</td>
    </tr>

    <tr>
      <td>Rear derailleur</td>
      <td>	Sram XX1 Eagle AXS™, 12-Speed</td>
    </tr>
    <tr>
      <td>Shifters</td>
      <td>	Sram Eagle AXS™ Controller</td>
    </tr>
       <tr>
      <td>wheels</td>
      <td>Newmen Advanced SL X.A.25 Carbon, 28/28 Spokes, 15x110mm / 12x148mm, Tubeless Ready</td>
    </tr>
    <tr>
      <td>Front tire</td>
      <td>Schwalbe Racing Ray, Super Race, Addix Speedgrip, Kevlar, 2.1</td>
    </tr>
    <tr>
      <td>Rear tire</td>
      <td>	Schwalbe Racing Ralph, Super Race, Addix Speed, Kevlar, 2.1</td>
    </tr>
        </thead>
</table>
<hr>
<i class="fa-solid fa-weight-hanging"></i>

    <thead>
    <table>
    <tr>
      <td>9.9 kg</td>
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
      <img src="/img-price/img-catalog/car311.png" class="d-block-2 d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car312.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car313.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car314.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car315.png" class="d-block w-100" alt="...">
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
            <img width="690px" height="480px" src="https://www.cuberussia.ru/f/product/w690_462_452400_ams_100_c68_slt_29_details_1.jpg" />
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
      <img src="/img-price/img-catalog/311.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-3">
      <img src="img-price/img-catalog/312.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-3">
      <img src="img-price/img-catalog/313.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-3">
      <img src="img-price/img-catalog/314.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-3">
      <img src="img-price/img-catalog/315.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-3">
      <img src="img-price/img-catalog/316.png" class="d-block w-100" alt="...">
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
        <a href="#"><img src="https://www.cuberussia.ru/f/product/w352_461_452300_ams_100_c68_sl_29.jpg"></img></a>
        <a href="#" aligin="right">AMS C:68 SL 29</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <a href="#"><img src="https://www.cuberussia.ru/f/product/w352_460_452200_ams_100_c68_tm_29.jpg"></img></a>
        <a href="#" aligin="right">AMS 100 C:68 TM 29</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <a href="#"><img src="https://www.cuberussia.ru/f/product/w352_459_452100_ams_100_c68_race_29.jpg"></img></a>
        <a href="#" aligin="right">AMS 100 C:68 RACE 29</a>
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