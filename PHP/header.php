<!DOCTYPE html>
<html>
<head>
    <!-- CSS here -->
    <?php
    require ("Css.php");
    ?>
    <header>
        <div id="sticky-header" class="menu-area transparent-header">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav show">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="../img/logo/logo.png" alt="Logo">
                                    </a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="active menu-item-has-children"><a href="../../index.php">Home</a>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Movie</a>
                                            <ul class="submenu">
                                                <li><a href="movie.html">Movie</a></li>
                                                <li><a href="movie-details.php">Movie Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contacts</a></li>
                                        <?php
                                        // Vérifier si l'utilisateur a le statut admin = 1
                                        // Récupérer les informations de l'utilisateur depuis la base de données
                                        $isAdmin = false; // Remplacer par la vérification réelle du statut admin
                                        if ($isAdmin) {
                                            echo "<li><a href='admin.php'>Admin</a></li>";
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul>
                                        <li class="header-btn"><a href="PHP/Connexion.php" class="btn">Sign In</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="mobile-menu">
                            <div class="close-btn"><i class="fas fa-times"></i></div>

                            <nav class="menu-box">
                                <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->
</head>
<body>
    <!-- Reste du contenu de la page -->
</body>
</html>
