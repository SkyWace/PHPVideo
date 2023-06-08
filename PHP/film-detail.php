<?php
require_once('ConnexionBDD.php');
require ('header.php');

// Vérifier si l'ID du film est passé en paramètre GET
if (isset($_GET['id'])) {
    $filmId = $_GET['id'];

    // Requête pour récupérer les détails du film spécifique
    $query = "SELECT * FROM movies WHERE id = $filmId";
    $stmt = $pdo->query($query);
    $film = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier si le film existe dans la base de données
    if ($film) {
        $title = $film['title'];
        $image = $film['image'];
        $year = $film['year'];
        $duration = $film['duration'];
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title><?= $title ?></title>
            <!-- Inclure la bibliothèque CSS Bootstrap -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <style>
                .movie-image {
                    max-width: 100%;
                    height: auto;
                }
            </style>
        </head>
        <body>
        <section class="film-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="film-image-wrap">
                            <img src="<?= $image ?>" alt="<?= $title ?>" class="movie-image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="film-content-wrap">
                            <h2><?= $title ?></h2>
                            <p>Year: <?= $year ?></p>
                            <p>Duration: <?= $duration ?> min</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor mauris ac feugiat
                                ultrices. Integer luctus, lectus id gravida porttitor, mauris lectus porta elit, non
                                lobortis mi est sit amet mauris.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </body>
        </html>
        <?php
    } else {
        // Afficher un message d'erreur si le film n'existe pas
        echo "Film not found";
    }
} else {
    // Afficher un message d'erreur si aucun ID de film n'est passé en paramètre GET
    echo "Invalid request";
}

require ('footer.php');
?>
