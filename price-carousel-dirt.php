<?php include_once "db.php"?>

<?php $imgs=getImageDert();


?>



<div class="container">
        <div class="row">
        <?php foreach ($imgs as $img) {?>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $img['URL']?>" class="card-img-top card-img-top-2 img-scl" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $img['TITLE']?></h5>
                        <p class="card-text-2"><?php echo $img['DESC']?></p>
                        <a href="<?php echo $img['GO_SOMEWHERE']?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <?php }?>
</div>