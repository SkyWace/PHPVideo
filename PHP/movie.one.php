<?php

ini_set('display_errors', 'on');

require_once 'Movie.php';

if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $getid = htmlspecialchars($_GET['id']);

    $movie = new Movie ($bdd);

    if ($movie->load($getid) != NULL) {
        $onemovie = $movie->load($getid);
        $id_movie = $onemovie['id'];
        $title = $onemovie['title'];
        $image = $onemovie['image'];
        $link = $onemovie['link'];
        $synopsis = $onemovie['synopsis'];
        $pegi = $onemovie['pegi'];    
    } else {
        die('Ce film n\'existe pas !');
    }
} else {
    die('Erreur');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?></title>
        <style>
            h1 {margin-left: 15%; color: rgba(22, 143, 18);}
            #img {float: right; margin-right: 2%; width: auto; height: 100px;}
            #blog {text-align: center; font-size: 2em; font-weight: bold; color: darkblue;}
            .movie {margin-left: 1%; margin-right: 1%;}
            td {width: 300px; }
            #descri {font-size: 1.4em;}
            #buttons {display: flex}
            #modif {background-color: blue; margin-left: 75%}
            #suppr {background-color: red; margin-left:0%}
            #modif, #suppr {
                color: white;
                width: fit-content;
                height: 30px;
            }
            .par {width: 30px}
            #pseudo {width: 100px}
            /* pour tablette */
            @media all and (max-width: 1024px) {
                #reseaux {display: block;}
            }
            /* pour mobile */
            @media all and (max-width: 767px) {
                .movie {display: flex; flex-direction: column;}
                #img {display: none;}
            }
        </style>
    </head>
    <body>
        <main>
            <div class="movie">
                <p id="title"><?= $title ?></p><br><br>
                <div id="buttons">
                    <button id='modif' onclick="window.location.href = 'movie.update.php?id=<?php print_r($id_movie) ?>'">MODIFIER</button>
                    <button id='suppr' onclick="window.location.href = 'movie.delete.php?id=<?php print_r($id_movie) ?>'">SUPPRIMER</button>
                </div><br><br>
                <h1><?= $title ?></h1><br><br><br><br><br>
                
                <a href="movie.all.php">Retour à tous les films</a><br><br>
                <p id="synopsis">Synopsis : <br><?= $synopsis ?></p><br>
                <p id="link">Lien : <?= $link ?></p><br>
                <?php if(!empty($image)) {
                    echo '<img style="max-width:20%" src="img/'.$image.'">';
                }?><br>
            </div>
            <hr>
        </main>
    </body>
</html>