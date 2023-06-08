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
        $releaseyear = $onemovie['releaseyear'];
        $duration = $onemovie['duration'];
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
    <style>
        img{width:5%;height:auto}
    </style>
    <title>Mettre à jour le film</title>
</head>
<body>
    <a href="movie.all.php">Retour</a>
    <form action="updatemovie.controller.php?id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <label for="title">Titre</label><br>
        <input type="text" name="title" value="<?= $title ?>" id="title"><br><br>
        <label for="image">Affiche</label><br>
        <img src="images/<?= $image ?>" alt="img"><br>
        <input type="file" name="image[]" value id="image[]"><br><br>
        <label for="Lien">Titre</label><br>
        <input type="text" name="link" value="<?= $link ?>" id="link"><br><br>
        <label for="synopsis">Synopsis</label><br>
        <input type="text" name="synopsis" value="<?= $synopsis ?>" id="synopsis"><br><br>
        <label for="duration">Durée</label><br>
        <input type="number" name="duration" value="<?= $duration ?>" id="duration"><br><br>
        <label for="releaseyear">Année de sortie</label><br>
        <input type="number" name="releaseyear" value="<?= $releaseyear ?>" id="releaseyear"><br><br>
        <label for="pegi">PEGI</label><br>
        <input type="number" name="pegi" value="<?= $pegi ?>" id="pegi"><br><br>
        <input type="submit" value="Modifier ce film">
    </form>
</body>
</html>