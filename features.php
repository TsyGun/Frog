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
<container class="for-fearures">
<div class="footer-2">
        <div class="row">
            <div class="col">
                <div class="single-post">
                <container class="for-fearures">

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img bg-fon" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <image xlink:href="/img-price/bg-for-features.jpg" />
          </svg>
          <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Froog from the inside</h1> 
                        </div>
                    </div>
        </div>
</container>
                </div>
            </div>
        </div>
        </container>
    <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Made in Germany<span class="text-muted"><br>It’ll blow your mind</span>
                    </h2>
                    <p class="lead">Passion for bicycles, continuous investment in research and development, in-house test laboratory, advanced communication technology, modern logistics solutions and automated warehouse enable CUBE to occupy a leading position in the European bicycle market. Our partner BOSCH is a recognized leader in the development and implementation of power units for bikes ranging from recreational to ultra-advanced competition bikes. Thanks to its vast experience and state-of-the-art technology, BOSCH is always ahead of the curve in the premium segment.

                    </p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <image x="0" y="0" width="100%" height="100%" xlink:href="\img-price\images.png" />
          </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Materials<span class="text-muted"><br>Carbon production technology<br>Reducing weight, increasing stiffness</span></h2>
                    <p class="lead">C:68 is an innovative technology in the field of carbon production. The large (up to 68%) proportion of carbon filaments in the polymer and the use of dispersed carbon nanoparticles allow us to shed weight while increasing frame rigidity. Since 2016, we have been using this high-end material for many existing and some promising platforms.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <image x="0" y="0" width="100%" height="100%" xlink:href="\img-price\12543543.jpg" />
          </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Froog<br>Test Lab<span class="text-muted"><br>Froog test lab - simulating the real life of a bicycle</span></h2>
                    <p class="lead">With full load, rough roads, extreme braking and other tests that simulate maximum riding loads. To be sure of the reliability and high quality of our CUBEs! Every bike and safety component is tested in our own laboratory.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <image x="0" y="0" width="100%" height="100%" xlink:href="\img-price\csm_ls_8045_cr_2500x1250.png_4bb0e65e8b.jpg" />
          </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

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
        <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/48964e9e83.js" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        </body>
    </html>