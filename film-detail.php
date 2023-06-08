<!DOCTYPE html>
<html>

<?php
    require ("PHP/Css.php");
require ('PHP/ConnexionBDD.php');
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de connexion</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/styleP.css">
</head>
<header class="FormConnexion">
    <?php
    require ("PHP/header.php");
    ?>
  </header>
<body class ="movie-detail">
    <main>
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
</main>
  <footer>
    <?php
    require ("PHP/footer.php"); 
    ?>
  </footer>
</body>

</html>