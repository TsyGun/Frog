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
<form action="/auth/signup.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" ><strong>Your username</strong>:</label>
    <input class="form-control" type="text" name="login" placeholder="Jane Doe" value="<?php echo @$data['login']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>Your email</strong>:</label>
    <input class="form-control" type="email" name="email" placeholder="@mail.ru" value="<?php echo @$data['email']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><strong>Your password</strong>:</label>
    <input class="form-control" type="password" name="password" placeholder="*****" value="<?php echo @$data['password']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><strong>Your password again</strong>:</label>
    <input class="form-control" type="password" name="password_2" placeholder="*****" value="<?php echo @$data['password_2']; ?>">
  </div>
  <button type="submit" name="do_signup" class="btn btn-primary">Submit</button>
</form>

</body>
<?php
require_once "db.php";
require_once "libs/rb.php";
$data = $_POST;
if( isset($data['do_signup']) ){
 // Здесь регистрируем//


$errors = array();
if( trim($data['login']) == '')
{
$errors[] = 'The login is not correct';
}

if( trim($data['email']) == '')
{
$errors[] = 'The email is not correct';
}

if($data['password'] == '')
{
$errors[] = 'The password is not correct';
}

if( $data['password_2'] != $data['password'] )
{
$errors[] = 'The password you entered is not correct';
}
if( R::count('users', "login = ?", array($data['login'])) > 0)
{
    $errors[] = 'A user with this login already exists';
}
if( R::count('users', "email = ?", array($data['email'])) > 0)
{
    $errors[] = 'A user with this email already exists';
}

if(empty($errors))
{
    $user = R::dispense('users');

                // добавляем в таблицу записи
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->password = $data['password'];

		// Хешируем пароль
		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);

		// Сохраняем таблицу
		R::store($user);
    echo '<div style="color: green;">You have successfully registered</div> <hr>';

} else 
{
    echo '<div style="color: red;">'.array_shift($errors).'</div> <hr>';
}
}
?>
