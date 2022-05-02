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
                    <h4 class="post-category">STEREO 140 HPC</h4>
                    <h5 class="post-category">TM 27.5</h5>
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
        <img class="ELITEC68X" src="https://www.cuberussia.ru/f/product/w1440_471_455200_stereo_150_c62_sl_29.jpg">
    </div>
    <div class="footer-2">
    <div class="row">
  <div class="col-sm-6">
    <p class="text-ELITEC68X">
    Since the world saw the first CUBE two-saddle, a lot of water has flowed. And a lot has changed, including in our friendly company from Bavaria. And that's okay: change is a harmonious part of the universe. Along with it, our developers get high on the process of constantly getting closer to perfection. All this neatly brings us to the creation of a masterpiece - the Stereo 150 C:62 SL. This CUBE combines everything we know about making light, fast and versatile bikes for enduro racing and/or alpine adventures. An elegant C:62 composite-based carbon chassis, plenty of mud clearance even with puffy tires, and an ISCG 05 mount is what any enduro bike should have. But the internal cable and hydraulic lines gasket, 160 mm of plush travel and the lightest fork for its monster 36-mm legs are the prerogative of the true leader. Together with the FOX Float DPX2 shock absorber the bike can swallow any stone under the wheels - you won't even notice. A remote-controlled seatpost is a modern rule of thumb, and it's included in the kit! The lightweight, stiff Shimano XT system mates well with the same manufacturer's 12-speed drivetrain, providing 510% of the gear range! Shimano XT 4-piston hydraulic brakes can pick up half a mountain on the descent under Evolution Newmen wheels shod in tenacious Schwalbe Addix tires. This Stereo 150 C:62 SL in the Actionteam battle colorway was created together and specifically for our factory CUBE ACTION TEAM.
    </p>
  </div>
   <div class="col-sm-2">
    <p class="text-ELITEC68X">
        <h5 class="post-category">Item:</h5> 455200
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
      <td>	Fox Float DPX2 Factory, 185x55mm Trunnion Mount, Open(Adjustable)/Medium/Firm Mode, Kashima Coated</td>
    </tr>
    <tr>
      <td>Shock absorber dimensions</td>
      <td>Top: 54mm Trunnion Mount, Bottom: 22x8mm</td>
    </tr>
    <tr>
      <td>Rudder</td>
      <td>	Race Face Chester 35, 780mm</td>
    </tr>
    <tr>
      <td>Grips</td>
      <td>CUBE Race SL Grip 29.5mm, 1-Clamp</td>
    </tr>
    <tr>
      <td>Takeaway</td>
      <td>	Race Face Aeffect R 35</td>
    </tr>
    <tr>
      <td>Saddle</td>
      <td>Natural Fit Nuance Lite</td>
    </tr>
    <tr>
      <td>Seatpost</td>
      <td>CUBE Dropper Post, Handlebar Lever, Internal Cable Routing, 31.6mm, 150mm (125mm for size S)</td>
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
      <td>	C:62 Monocoque Advanced Twin Mold Technology, ATG, ETC 4-Link, ISCG Mount, Boost 148, AXH</td>
    </tr>
    <tr>
      <td>Frame size</td>
      <td>	29: S, M, L, XL </td>
    </tr>

    <tr>
      <td>Color</td>
      <td>	actionteam</td>
    </tr>
    <tr>
      <td>Fork</td>
      <td>Fox 36 Float Factory FIT GRIP2, Tapered, 15x110mm, 160mm, Kashima Coated</td>
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
      <td>	Shimano XT FC-M8100, 32T, Boost, 170mm</td>
    </tr>
    <tr>
      <td>Brakes</td>
      <td>Shimano XT BR-M8120, Hydr. Disc Brake (203/180)</td>
    </tr>

    <tr>
      <td>Rear derailleur</td>
      <td>	Shimano XT RD-M8100-SGS, ShadowPlus, 12-Speed</td>
    </tr>
    <tr>
      <td>Shifters</td>
      <td>	Shimano SLX SL-M7100-I, Direct Attach</td>
    </tr>
       <tr>
      <td>wheels</td>
      <td>Newmen Evolution SL A.30, 28/28 Spokes, 15x110mm / 12x148mm, Tubeless Ready</td>
    </tr>
    <tr>
      <td>Front tire</td>
      <td>Schwalbe Magic Mary, Super Trail, Addix Soft, Kevlar, 2.4</td>
    </tr>
    <tr>
      <td>Rear tire</td>
      <td>Schwalbe Big Betty, Super Trail, Addix Soft, Kevlar, 2.4</td>
    </tr>
        </thead>
</table>
<hr>
<i class="fa-solid fa-weight-hanging"></i>

    <thead>
    <table>
    <tr>
      <td>14.6 kg</td>
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
      <img src="/img-price/img-catalog/car331.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car332.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car333.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car334.png" class="d-block w-100" alt="...">
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
            <img width="690px" height="480px" src="https://www.cuberussia.ru/f/product/w690_471_455200_stereo_150_c62_sl_29_details_1.jpg" />
        </div>
        <div class="row">
            <div class="col">
                <div class="single-post">
                <p class="text-ELITEC68X">
                
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
      <img src="/img-price/img-catalog/carousel-341.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-3">
      <img src="img-price/img-catalog/carousel-342.png" class="d-block w-100" alt="...">
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