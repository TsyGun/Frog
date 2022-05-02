<header>
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Source+Serif+Pro:wght@200&display=swap" rel="stylesheet">
</header>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">Froog</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/home.php">Home</a>
        <a class="nav-link" href="/features.php">Features</a>
        <a class="nav-link" href="/price.php">Pricing</a>
      <div class="container-fluid">
  </div>
      </div>
      
    </div>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<form action="login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>Your username</strong>:</label>
    <input class="form-control" type="text" name="login" value="<?php echo @$data['login']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><strong>Your password</strong>:</label>
    <input class="form-control" type="password" name="password" value="<?php echo @$data['password']; ?>">
  </div>
 
  <button type="submit" name="do_login" class="btn btn-primary">Submit</button>
</form>
</body>
<?php
require_once "db.php";
require_once "libs/rb.php";
$data=$_POST;
if( isset($data['do_login']) )
{
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['login']));
if( $user )
{
if( password_verify($data['password'], $user->password) )
{

    $_SESSION['logged_user'] = $user;
echo '<div style="color: green;">You are authorized. You can go to the <a href="/home.php">homepage</a></div> <hr>';
} else 
{
    $errors[] = 'Incorrect password entered';
}
} else
{
    $errors[] = 'No user with this username was found';
}

if( ! empty($errors))
{
    echo '<div style="color: red;">'.array_shift($errors).'</div> <hr>';
}

}

?>
