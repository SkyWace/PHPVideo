<?php

ini_set('display_errors', 'on');

require_once 'bdd.php';
require_once 'Movie.php';

if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $movie = new Movie($bdd);
    $movie->insert();
}
header("Location: movie.all.php");
?>

