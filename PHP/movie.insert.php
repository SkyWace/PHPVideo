<?php

ini_set('display_errors', 'on');

require_once 'bdd.php';

$select = $bdd->prepare("SELECT * FROM gender");
$select->execute();
$genders = $select->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert movie</title>
</head>
<body>
    <a href="movie.all.php">Retour</a>
    <form action="insertmovie.controller.php" method="post" enctype="multipart/form-data">
        <label for="title">Titre</label><br>
        <input type="text" name="title" id="title"><br><br>
        <label for="image">Affiche</label><br>
        <input type="file" name="image[]" id="image[]"><br><br>
        <label for="Lien">Lien</label><br>
        <input type="text" name="link" id="link"><br><br>
        <label for="synopsis">Synopsis</label><br>
        <input type="text" name="synopsis" id="synopsis"><br><br>
        <label for="duration">Durée</label><br>
        <input type="number" name="duration" id="duration"><br><br>
        <label for="releaseyear">Année de sortie</label><br>
        <input type="number" name="releaseyear" id="releaseyear"><br><br>
        <label for="pegi">PEGI</label><br>
        <input type="number" name="pegi" id="pegi"><br><br>
        <input type="submit" value="Ajouter ce film">
    </form>
</body>
</html>