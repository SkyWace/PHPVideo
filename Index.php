<?php
require ('PHP/ConnexionBDD.php');
?>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Movflx - Streaming, Emissions TV et +.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->


    </head>
    <body>

        <!-- preloader -->
        <!--<div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="img/preloader.svg" alt="">
                </div>
            </div>
        </div>-->
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->
<?php
    require ('PHP/header.php');
?>
        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section class="banner-area banner-bg" data-background="img/banner/banner_bg01.jpg">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="banner-content">
                                <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">Movflx</h6>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">Films <span>illimités</span>,Emisions TV & Ultra x.</h2>
                                <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                                    <ul>
                                        <li class="quality">
                                            <span>Pg 42</span>
                                            <span>hd</span>
                                        </li>
                                        <li class="category">
                                            <a href="#">CESI,</a>
                                            <a href="#">DI2022</a>
                                        </li>
                                        <li class="release-time">
                                            <span><i class="far fa-calendar-alt"></i> 2022</span>
                                            <span><i class="far fa-clock"></i> 2 Years</span>
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://www.youtube.com/watch?v=_9oRPJqBv1s" class="banner-btn btn popup-video wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.8s"><i class="fas fa-play"></i> Watch Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner-area-end -->

            <!-- services-area -->
            <section id="Movie" class="services-area services-bg" data-background="img/bg/services_bg.jpg">
    <div class="container">
        <div class="row align-items-center">
            <?php        
            // Requête pour récupérer les films
            $query = "SELECT * FROM movies";
            $stmt = $pdo->query($query);

            // Affichage des films
            foreach ($stmt as $row ) {
                $filmId = $row['id']; // Récupérer l'ID du film
                $title = $row['title'];
                $image = $row['image'];
                $year = $row['year'];
                $duration = $row['duration'];
            ?>
            <div class="col-lg-6">
                <div class="services-img-wrap">
                    <a href="film-detail.php?id='<?= $filmId ?>'"><img src="<?= $image ?>" alt="<?= $title ?>" class="movie-image"></a>
                    <a href="film-detail.php?id=<?= $filmId ?>" class="download-btn" download>Watch <img src="fonts/download.svg" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-content-wrap">
                    <div class="section-title title-style-two mb-20">
                        <span class="sub-title">Movie</span>
                        <h2 class="title"><?= $title ?></h2>
                    </div>
                    <p><?= $year ?> - <?= $duration ?> min</p>
                    <div class="services-list">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-television"></i>
                                </div>
                                <div class="content">
                                    <h5>Enjoy on Your TV.</h5>
                                    <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-video-camera"></i>
                                </div>
                                <div class="content">
                                    <h5>Watch Everywhere.</h5>
                                    <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>


        <!-- footer-area -->
        <footer>
            <div class="footer-top-wrap">
                <div class="container">
                    <div class="footer-menu-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="footer-menu">
                                    <nav>
                                        <ul class="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="#Movie">Movie</a></li>
                                            <li><a href="index.html">tv show</a></li>
                                            <li><a href="index.html">pages</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                        </ul>
                                        <div class="footer-search">
                                            <form action="#">
                                                <input type="text" placeholder="Find Favorite Movie">
                                                <button><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-quick-link-wrap">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="quick-link-list">
                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2021. All Rights Reserved By <a href="index.html">PHPVideo</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="payment-method-img text-center text-md-right">
                                <img src="img/images/card_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
