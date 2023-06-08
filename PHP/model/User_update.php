<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/animate.min.css">
        <link rel="stylesheet" href="../../css/magnific-popup.css">
        <link rel="stylesheet" href="../../css/fontawesome-all.min.css">
        <link rel="stylesheet" href="../../css/flaticon.css">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/responsive.css">
        <link rel="stylesheet" href="../../css/styleP.css">
</head>
<?php
require ('../Css.php');
require ('../header.php');
require_once ('User.php'); // Inclure la classe User
?>
<body class="Form-Profil">
    <table> 
        <tbody>
<?php
// Instancier la classe User
$user = new User();

// Vérifier si le formulaire a été soumis pour mettre à jour un utilisateur
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['prenom'];
    $email = $_POST['email'];
    $user->update($id, $prenom, $email);
}

// Récupérer la liste des utilisateurs depuis la base de données
$users = $user->all();


// Afficher la liste des utilisateurs
echo "<h1>Liste des utilisateurs</h1>";
echo "<table>";
echo "<tr><th>ID</th><th>Prenom</th><th>Email</th><th>Action</th></tr>";
foreach($users as $user) {
    echo "<tr>";
    echo "<td>".$user['id']."</td>";
    echo "<td>".$user['prenom']."</td>";
    echo "<td>".$user['email']."</td>";
    echo "<td><a href='edit.php?id=".$user['id']."'>Modifier</a></td>";
    echo "</tr>";
}
echo "</table>";
?>
</tbody>
    </table>
</body>
</html>