<?php

ini_set('display_errors', 'on');

require_once 'bdd.php';
require_once 'Movie.php';

if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $id = $_GET['id'];
    $movie = new Movie($bdd);
    $movie->update($_GET['id']);
}

header("Location:movie.one.php?id=$id");
?>