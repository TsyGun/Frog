<?php 

include_once "db.php";
require_once "auth/db.php";

?>
<!doctype html>
<html lang="en">
<html>
<head>
    <?php include_once "header.php"?>
</head>
    <body>
<?php include_once "nav.php" ?>
<div class="carousel-inner">
<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="container-slider">
    <div class="carousel-item active">
      <img src="img/1.png" class="img-slider"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/2.png"  class="img-slider" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/3.png"  class="img-slider" alt="...">
    </div>
  </div>
</div>
</div>
<div class="footer">
        <div class="row">
            <div class="col">
                <div class="single-post">
                    <h4 class="post-category">Bike</h4>
                    <h2 class="post-title"><a href="#">DownHill</a></h2>
                    <p>
                        Downhill mountain biking (DH) is a genre of mountain biking practiced on steep, rough terrain that often features jumps, drops, rock gardens and other obstacles. Jumps can be up to and including 12 meters (39 feet), and drops can be greater than 3 meters
                        (10 feet). The rider commonly travels to the point of descent a ski lift or automobile, since the weight of the downhill mountain bike often precludes any serious climbing. In this context, the use of a motorized vehicle or device
                        does not make DH a motorized sport. Downhill racers must possess a unique combination of total body strength, aerobic and anaerobic fitness, and the acceptance of a relatively high risk of incurring serious permanent injuries.

                    </p>
                    <br>
                    <p><a href="#" class="link-more">Leave a comment</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "template/img-card.php";?>
    
    <section class="signup">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 form-input">
                    <h3 class="text-center">Sign up for our newsletter!</h3>
                    <form  action="/template/addmessage.php" method="POST">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="name" class="form-control" id="email" placeholder="Name" required="">
                                <input type="conent" name="content" class="form-control" placeholder="@mail.ru" required="">
                                <button class="btn-for-email" type="submit">&#10146;</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-bottom">
        <div class="row">
            <div class="col">
                <div class="single-post">
                    <h4 class="post-category">Bike</h4>
                    <h2 class="post-title"><a href="#">DownHill</a></h2>
                    <p>
                        Downhill mountain biking (DH) is a genre of mountain biking practiced on steep, rough terrain that often features jumps, drops, rock gardens and other obstacles. Jumps can be up to and including 12 meters (39 feet), and drops can be greater than 3 meters
                        (10 feet). The rider commonly travels to the point of descent a ski lift or automobile, since the weight of the downhill mountain bike often precludes any serious climbing. In this context, the use of a motorized vehicle or device
                        does not make DH a motorized sport. Downhill racers must possess a unique combination of total body strength, aerobic and anaerobic fitness, and the acceptance of a relatively high risk of incurring serious permanent injuries.

                    </p>
                    <br>
                    <p><a href="#" class="link-more">Leave a comment</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-2">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Accordion Item #1
            </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Accordion Item #2
            </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Accordion Item #3
            </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up
                        the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-2"></div>
    <?php include_once "template/video-card.php;"?>
   <footer class="for-index">
        <div class="container-2">
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
    </body>
</html>