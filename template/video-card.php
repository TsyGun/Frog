<?php include_once "db.php";?>

<?php $cards=getCarouselCards();

?>
<div class="container container-1">
        <div class="row">
            <?php foreach ($cards as $card) {?>
                <div class="col">
                    <div class="card">
                        <video class="card-img-top img-scl" src="<?php echo $card['VIDEO']?>" type="video/webm" muted alt="..."></video>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $card['TITLE']?></h5>
                            <p><?php echo $card['DESCRIPTION']?></p>
                            <a href="<?php echo $card['URL']?>" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
</div>
