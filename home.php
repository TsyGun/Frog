<?php 

include_once "db.php";
require_once "auth/db.php";

?>
<!doctype html>
<html lang="en">
<html>
<head>
    <?php include_once "header.php" ?>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

        <video class="bg-video " playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="/video/DREAM BUILD MTB - EVIL OFFERING.webm" type="video/mp4" /></video>
        <div class="masthead">
        <div class="masthead-content text-white">
        <nav class="navbar-expand-lg navbar-dark  navbar-2">
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
</nav>
                <div class="container-fluid px-4 px-lg-0">
                <h1 class="fst-italic lh-1 mb-4">Froog welcomes you!</h1>
                    <p class="mb-5">We do our best to keep you riding at your pleasure.</p>
                </div>
                <footer class="for-index">
        <div class="container-2">
            <div class="d-sm-flex justify-content-between">
                <div class="footer-left-2">
                    <a href="#">Terms and conditions</a>
                    <a href="#">Privac</a>
                </div>
                <div class="footer-right">
                    <span>Follow</span>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter-square"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram-square"></i></a>
                </div>
            </div>
        </div>
    </footer>
    </div>
</div>

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
</html>