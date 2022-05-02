<?php 
include_once "db.php";
require_once "auth/libs/rb.php";
require_once "auth\db.php";

$connect = new mysqli ("localhost", "root", "", "search");
$query = mysqli_query($connect, "SELECT * FROM test");

?>
<html>
    <header>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Source+Serif+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>froog</title>
    </header>
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
        <a class="nav-link" href="/searchResult.php">Disabled</a>
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
<div class="footer-2">
<?php 
    if(isset($_POST['submit'])){
        $search = explode(" ", $_POST['search']);
        $array = array();
        $i = 0;
        foreach($search as $key) {
            $i++;
            if($i < count($search)) $array[] = "CONCAT (`title`, `desc`, `img`, `go`) LIKE '%".$key."%' OR"; else $array[] = "CONCAT (`title`, `desc`, `img`, `go`) LIKE '%".$key."%'";
        }
        $sql = "SELECT * FROM `test` WHERE " .implode("", $array);
        $query = mysqli_query($connect, $sql);
        
        //while($row = mysqli_fetch_assoc($query)) echo "<h1>".$row['title']."</h1><p>".$row['desc']."</p><p>".$row['img']."</p><p>".$row['go']."</p>";
        while($row = mysqli_fetch_assoc($query)) echo '
        <div class="col-sm-6">
        <div class="card">
        <img src="'.$row['img'].'" class="card-img-top">
        <div class="card-body">
        <h5 class="card-title">'.$row['title'].'</h5>
        <p class="card-text">'.$row['desc'].'
        <br>
        <a class="btn btn-primary" href="'.$row['go'].'">Go somemore</a>
        </div>
        </div>
        </div>
        ';
    }
    ?>

<hr>
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
        </div>    
    </body>
    </html>