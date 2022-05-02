<?php include "db.php";?>
<nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a>
        <?php if ($identity==null): ?>
        <a href="#">Sign in</a>
        <?php else: ?>
        <strong>Welcome, <?= $identity ?></strong> <a href="#">Sign out</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>