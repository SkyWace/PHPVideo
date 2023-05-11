<?php

require_once 'bdd.php';

$title = $_POST['title'];
$image = $_POST['image'];
$link = $_POST['link'];

var_dump($title, $image, $link);

if(isset($title, $image, $link)) {
    $query = $bdd->prepare("INSERT INTO movies (title, image, link) VALUES ('$title', '$image', '$link')");
    $query->execute();
    header("Location:movie.insert.php");
}

?>