<?php

require_once 'bdd.php';
require_once 'Movie.php';

$title = $_POST['title'];
$image = $_POST['image'];
$link = $_POST['link'];
$synopsis = $_POST['synopsis'];
$pegi = $_POST['pegi'];

if(isset($title, $image, $link, $synopsis, $pegi)) {
    $query = $bdd->prepare("INSERT INTO movies (title, image, link) VALUES ('$title', '$image', '$link')");
    $query->execute();
    
    $idmovie = intval($bdd->lastInsertId());
       
    $query2 = $bdd->prepare("INSERT INTO movies_infos(idmovie, synopsis, pegi) VALUES ('$idmovie', '$synopsis', '$pegi')");
    $query2->execute();

    header("Location:movie.all.php");
}

?>