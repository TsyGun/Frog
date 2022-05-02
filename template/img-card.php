<?php include_once "db.php";?>


<?php $imgs=getImageCards();


?>

<div class="container">
        <div class="row">
        <?php foreach ($imgs as $img) {?>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $img['URL']?>" class="card-img-top img-scl" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $img['TITLE']?></h5>
                        <p class="card-text"><?php echo $img['DESCRIPTION']?></p>
                        <a href="<?php echo $img['GO_SOMEWHERE']?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <?php }?>
             <div class="col-text-center after-posts">
                <button type="button" class="btn btn-secondary load-more">Load more
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                </button>
        </div>
</div>