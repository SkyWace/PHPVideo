<?php

require_once 'Movie.php';

ini_set('display_errors', 'on');

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mettre à jour le film</title>
</head>
<body>
    <a href="movie.all.php">Retour</a>
    <form action="insertmovie.controller.php" method="post">
        <label for="title">Titre</label><br>
        <input type="text" name="title" id="title" value="<?= $title ?>"><br><br>
        <label for="image">Affiche</label><br>
        <input type="text" name="image" id="image" value="<?= $image ?>"><br><br>
        <label for="link">Lien</label><br>
        <input type="text" name="link" id="link" value="<?= $link ?>"><br><br>
        <label for="synopsis">Synopsis</label><br>
        <input type="text" name="synopsis" id="synopsis" value="<?= $synopsis ?>"><br><br>
        <label for="pegi">PEGI</label><br>
        <input type="number" name="pegi" id="pegi" value="<?= $pegi ?>"><br><br>
        <input type="submit" value="Modifier ce film">
    </form>
</body>
</html>