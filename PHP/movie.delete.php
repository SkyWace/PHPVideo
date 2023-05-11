<?php

require_once 'Movie.php';

if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $article = new Article ($_GET['id']);
    $article->delete($_GET['id']);
    header("Location: movie.all.php");
}

?>