<?php include_once "db.php"?>

<?php $imgs=getImageTwosaddle();


?>



<div class="container">
        <div class="row">
        <?php foreach ($imgs as $img) {?>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $img['URL']?>" class="card-img-top-3 img-scl" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $img['TITLE']?></h5>
                        <p class="card-text-2"><?php echo $img['DESC']?></p>
                        <a href="<?php echo $img['URL_SOMEMORE']?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
</div>