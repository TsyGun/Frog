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
                    <h4 class="post-category">STEREO HYBRID 160 HPC</h4>
                    <h5 class="post-category">SL 625</h5>
                    <p>
                    Размер рамы:
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-secondary">16</button>
                    <button type="button" class="btn btn-secondary">18</button>
                    <button type="button" class="btn btn-secondary">20</button>
                    <button type="button" class="btn btn-secondary">22</button>
                    </div>
                    </p>
                    <br>
                </div>
               
            </div>
            
        </div>
        <img class="ELITEC68X" src="https://www.cuberussia.ru/f/product/w1440_363_437102_stereo_hybrid_160_hpc_sl_625.jpg">
    </div>
    <div class="footer-2">
    <div class="row">
  <div class="col-sm-6">
    <p class="text-ELITEC68X">
    Welcome to the world of the all-new Stereo Hybrid 160 HPC SL, a bike that redefines everything possible. Oh, yeah. Building the world's best enduro bike isn't easy. It's even harder to build one that combines true enduro functionality with the ease of use of a Bosch electric drive. Fortunately, CUBE's years of experience in the World Enduro Series, as well as experience building electric hybrids on Bosch components, help make the job a little easier. Reinforced bearings in the levers, internal cable and cable routing, heavy-duty feathers, and an easily accessible flask holder are just some of the details that make this bike stand out. As for the specs, it would have been possible to offset the price by cutting a few corners. But that's not Cube's approach. That's why everything is in its place. You'll find both a RockShox Deluxe Select shock absorber and a RockShox Zeb fork with 38mm legs and 170mm travel. The dropper is in place, of course. So is the Sram NX Eagle 12-speed drivetrain. In general, read the specification, it says it all. We just wish you pleasant riding in the mountains. After all, this bike is created for conquering peaks.
    </p>
  </div>
   <div class="col-sm-2">
    <p class="text-ELITEC68X">
        <h5 class="post-category">Item:</h5>437102
    </p>
    </div>
    <div class="col-sm-3">
    <p class="text-ELITEC68X">
        <h5 class="post-category">Frame dimensions:</h5><br> S (16"), M (18"), L (20"), XL (22")
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
      <td>	RockShox Deluxe Select, 205x60mm, Rebound Adjust, Trunnion Mount</td>
    </tr>
    <tr>
      <td>Shock absorber dimensions</td>
      <td>Top: 54mm Trunnion Mount, Bottom: 22.2x8mm</td>
    </tr>
    <tr>
      <td>Rudder</td>
      <td>	CUBE EX30, 32H, Disc, Tubeless Ready</td>
    </tr>
    <tr>
      <td>Grips</td>
      <td>	CUBE Race Grip 31mm, 1-Clamp</td>
    </tr>
    <tr>
      <td>Takeaway</td>
      <td>	CUBE Performance Stem E-MTB, 31.8mm</td>
    </tr>
    <tr>
      <td>Saddle</td>
      <td>	Natural Fit Venec</td>
    </tr>
    <tr>
      <td>Seatpost</td>
      <td>CUBE Dropper Post, Handlebar Lever, Internal Cable Routing, 31.6mm (S: 100mm, M: 125mm, L, XL: 150mm)</td>
    </tr>
    <tr>
      <td>Suspension clamp</td>
      <td>	CUBE Screwlock Semi-Integrated, 34.9mm</td>
    </tr>
    <tr>
      <td>Chain</td>
      <td>	Sram SX Eagle™</td>
    </tr>
    <tr>
      <td>Cassette</td>
      <td>	Sram PG-1210 Eagle™, 11-50T</td>
    </tr>

    <tr>
      <td>Steering columnn</td>
      <td>ACROS AZX-1030, Top Zero-Stack 1 1/2" (ZS 56mm), Bottom Zero-Stack 1 1/2" (ZS 56mm)</td>
    </tr>
    tr>
      <td>Electric actuator</td>
      <td>	Bosch Drive Unit Performance CX Generation 4 (85Nm) Cruise (250Watt)</td>
    </tr>
    tr>
      <td>Battery</td>
      <td>	Bosch PowerTube 625</td>
    </tr>
    tr>
      <td>Display</td>
      <td>	Bosch Kiox</td>
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
      <td>	C:62 Monocoque Advanced Twin Mold Technology, Aluminum 6061 T6 Rear Triangle, Efficient Trail Control, FSP 4-Link, Agile Trail Geometry, Boost 148, Full Integrated Battery</td>
    </tr>
    <tr>
      <td>Frame size</td>
      <td>	S (16"), M (18"), L (20"), XL (22")</td>
    </tr>

    <tr>
      <td>Color</td>
      <td>	grey´n´black</td>
    </tr>
    <tr>
      <td>Fork</td>
      <td>RockShox ZEB Charger R, 15x110mm, Tapered, eMTB Approved, 170mm</td>
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
      <td>ACID E-Crank, 36T, 165mm</td>
    </tr>
    <tr>
      <td>Brakes</td>
      <td>	Magura MT Thirty, Front 4-Piston/Rear 4-Piston, Hydr. Disc Brake (203/203)</td>
    </tr>

    <tr>
      <td>Rear derailleur</td>
      <td>Sram NX Eagle™, 12-Speed</td>
    </tr>
    <tr>
      <td>Shifters</td>
      <td>	Sram NX Eagle™ Trigger, Single Click</td>
    </tr>
       <tr>
      <td>wheels</td>
      <td>Newmen Evolution SL A.30, 28/28 Spokes, 15x110mm / 12x148mm, Tubeless Ready</td>
    </tr>
    <tr>
      <td>Front tire</td>
      <td>Maxxis Assegai, MaxxGrip/EXO+, Tubeless Ready, 2.5 WT</td>
    </tr>
    <tr>
      <td>Rear tire</td>
      <td>	Maxxis Minion DHR II, MaxxGrip/DoubleDown, Tubeless Ready, 2.4 WT</td>
    </tr>
        </thead>
</table>
<hr>
<i class="fa-solid fa-weight-hanging"></i>

    <thead>
    <table>
    <tr>
      <td>15.8 kg</td>
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
      <img src="/img-price/img-catalog/car361.png" class="d-block-2 d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car362.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car363.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car364.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-2 ">
      <img src="/img-price/img-catalog/car365.png" class="d-block w-100" alt="...">
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
            <img width="690px" height="480px" src="https://www.cuberussia.ru/f/product/w690_363_437102_stereo_hybrid_160_hpc_sl_625_details_1.jpg" />
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
      <img src="/img-price/img-catalog/carousel-361.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel-item-3">
      <img src="img-price/img-catalog/carousel-362.png" class="d-block w-100" alt="...">
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