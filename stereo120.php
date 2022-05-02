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
                    <h4 class="post-category">STEREO 120</h4>
                    <h5 class="post-category">Race</h5>
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
        <img class="ELITEC68X" src="https://www.cuberussia.ru/f/product/w1440_464_453200_stereo_120_race_29.jpg">
    </div>
    <div class="footer-2">
    <div class="row">
  <div class="col-sm-6">
    <p class="text-ELITEC68X">
    The Stereo 120 Race Niner is about super efficiency and super comfort. And super design, of course. Just look at the smooth, perfectly aligned lines created by the hydroforming process. It is impossible to take your eyes off. However, you don't ride a bicycle with your eyes, as you know, but with your feet. And everything is great here. We carefully thought out all the details and put great components, to end up with a comfortable, versatile bike companion for riding on any trails. RockShox's 130mm stroke fork provides smooth, easily adjustable cushioning and road control, works in tandem with the RockShox Deluxe Select+ rear shock, which gives the bike 120mm of rear suspension travel. Wide Fulcrum Red 77 rims wrapped in tenacious Schwalbe Nobby Nic tires keep the rear wheel in contact with the trail. Shimano's crisp, smooth 12-speed drivetrain makes any hill climb a breeze. If you climbed up and decided to go down it's no problem - the hydraulic disc brakes with 180mm rotors guarantee speed control on the trails. And in order to conquer ascents and descents with equal ease, we added a telescopic seatpost to the design. Lastly, check out the details like internal cable routing and hydraulic lines, as well as the hinges in the suspension units hidden beneath the pads. Agree, it looks simply chic! And the ride, believe me, is not any worse.

The Stereo 120 HPA is the winner of MountainBike's BEST VALUE FOR MONEY award.


    </p>
    </div>
   <div class="col-sm-2">
    <p class="text-ELITEC68X">
        <h5 class="post-category">Item:</h5> 453200
    </p>
    </div>
    <div class="col-sm-3">
    <p class="text-ELITEC68X">
        <h5 class="post-category">Frame dimensions:</h5><br> 29: S, M, L, XL
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
      <td>	RockShox Deluxe Select+, 190x45mm, Rebound Adjust, Lockout</td>
    </tr>
    <tr>
      <td>Shock absorber dimensions</td>
      <td>Top: 40x8mm, Bottom: 22x8mm</td>
    </tr>
    <tr>
      <td>Rudder</td>
      <td>	Newmen Evolution SL 318.25, 760mm</td>
    </tr>
    <tr>
      <td>Grips</td>
      <td>	CUBE Race SL Grip 29.5mm, 1-Clamp</td>
    </tr>
    <tr>
      <td>Takeaway</td>
      <td>Newmen Evolution 318.4, 31.8mm</td>
    </tr>
    <tr>
      <td>Saddle</td>
      <td>	Natural Fit Venec Lite</td>
    </tr>
    <tr>
      <td>Seatpost</td>
      <td>CUBE Dropper Post, Handlebar Lever, Internal Cable Routing, 31.6mm, 130mm (120mm for size S)</td>
    </tr>
    <tr>
      <td>Suspension clamp</td>
      <td>	CUBE Screwlock, 34.9mm</td>
    </tr>
    <tr>
      <td>Chain</td>
      <td>	Shimano CN-M6100</td>
    </tr>
    <tr>
      <td>Cassette</td>
      <td>	Shimano Deore CS-M6100, 10-51T</td>
    </tr>

    <tr>
      <td>Steering columnn</td>
      <td>	VP Tapered, Top Zero-Stack 1 1/8" (OD 44mm), Bottom Zero-Stack 1 1/2" (OD 56mm)</td>
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
      <td>	HPA Advanced Hydroform, ATG, ETC 4-Link, AXH</td>
    </tr>
    <tr>
      <td>Frame size</td>
      <td>	29: S, M, L, XL</td>
    </tr>

    <tr>
      <td>Color</td>
      <td>	lightgrey´n´black</td>
    </tr>
    <tr>
      <td>Fork</td>
      <td>	RockShox Recon Gold RL Air, Tapered, 15x110mm, 130mm</td>
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
      <td>	Shimano FC-MT511, Boost, 30T</td>
    </tr>
    <tr>
      <td>Brakes</td>
      <td>	Shimano BR-MT500, Hydr. Disc Brake (180/180)</td>
    </tr>

    <tr>
      <td>Rear derailleur</td>
      <td>	Shimano XT RD-M8100-SGS, ShadowPlus, 12-Speed</td>
    </tr>
    <tr>
      <td>Shifters</td>
      <td>Shimano Deore SL-M6100, Rapidfire-Plus</td>
    </tr>
       <tr>
      <td>wheels</td>
      <td>	Fulcrum Red 77, 28/28 Spokes, 15x110mm / 12x148mm, 622x23C, Tubeless Ready</td>
    </tr>
    <tr>
      <td>Front tire</td>
      <td>	Schwalbe Nobby Nic, Addix Performance, Kevlar, 2.35</td>
    </tr>
    <tr>
      <td>Rear tire</td>
      <td>	Schwalbe Nobby Nic, Addix Performance, Kevlar, 2.35</td>
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
      <img src="/img-price/img-catalog/car321.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car323.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car324.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car325.png" class="d-block w-100" alt="...">
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
            <img width="690px" height="480px" src="https://www.cuberussia.ru/f/product/w690_464_453200_stereo_120_race_29_details_1.jpg" />
        </div>
        <div class="row">
            <div class="col">
                <div class="single-post">
                <p class="text-ELITEC68X">
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
      <img src="/img-price/img-catalog/carousel-321.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-3">
      <img src="img-price/img-catalog/carousel-322.png" class="d-block w-100" alt="...">
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