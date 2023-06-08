<?php

ini_set('display_errors', 'on');

require_once 'bdd.php';

$query = $bdd->prepare("SELECT mo.id, mo.title, mo.image, mo.link, mi.synopsis, mi.duration, mi.releaseyear, mi.pegi FROM movies AS mo LEFT JOIN movies_infos AS mi ON mi.idmovie = mo.id");
$query->execute();
$movies = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            table {border-collapse: collapse;}
            td {
                border: 1px solid blue;
                padding-right: 5%;
                height: 25%;
                width: auto;
                font-size: 1.2em;}
            th {font-size: 1.4em}
            #titre {width: 250px}
            #contenu {width: 300px}
            #der {
                padding-left: 12%;
                color: red;
                font-weight: bold;
                font-size: 1.4em;
            }
    </style>
</head>
<body>
<a href="movie.insert.php">Ajouter un nouveau film</a>
<div id="der"><p>Derniers films</p></div>

<table>
    <tr>
        <th id="tone" colspan =1>Détails</th>
        <th id="ttitle" colspan=1>Titre</th>
        <th id="tlink" colspan=1>Lien visionnage</th>
        <th id="tcontenu" colspan=1>Contenu</th>
        <th id="treleaseyear" colspan=1>Année de sortie</th>
        <th id="tduration" colspan=1>Durée</th>
        <th id="tpegi" colspan=1>PEGI</th>
        <th colspan=1>AFF SI ADMIN</th>
        <th colspan=1>AFF SI ADMIN</th>
    </tr>
    <tr>
        <?php foreach ($movies as $key) {
            echo '<tr>';
            echo '<td><a href="movie.one.php?id='.$key['id'].'">►</a></td>';
            echo '<td id="title">'.$key ['title'].'</td>';
            echo '<td id="link">'.substr($key ['link'], 0, 30). '</td>';
            echo '<td id="synopsis">'.substr($key ['synopsis'], 0, 80).'...'. '</td>';
            echo '<td id="duration">'.$key ['duration']. '</td>';
            echo '<td id="releaseyear">'.$key ['releaseyear']. '</td>';
            echo '<td id="pegi">'.$key ['pegi']. '</td>';
            echo '<td><a href="movie.update.php?id='.$key['id'].'">Modif</a></td>';
            echo '<td><a href="movie.delete.php?id='.$key['id'].'">Suppr</a></td>';
            echo '</tr>';
        }
        ?>
    </tr>
</table>

</body>
</html>