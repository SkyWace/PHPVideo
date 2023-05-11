
<?php
require ('../PHP/header.php');
require_once 'User.php'; // Inclure la classe User

// Instancier la classe User
$user = new User();

// Vérifier si le formulaire a été soumis pour mettre à jour un utilisateur
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user->update($id, $name, $email);
}

// Récupérer la liste des utilisateurs depuis la base de données
$users = $user->all();


// Afficher la liste des utilisateurs
echo "<h1>Liste des utilisateurs</h1>";
echo "<table>";
echo "<tr><th>ID</th><th>Nom</th><th>Email</th><th>Action</th></tr>";
foreach($users as $user) {
    echo "<tr>";
    echo "<td>".$user['id']."</td>";
    echo "<td>".$user['firstname']."</td>";
    echo "<td>".$user['username']."</td>";
    echo "<td><a href='edit.php?id=".$user['id']."'>Modifier</a></td>";
    echo "</tr>";
}
echo "</table>";
?>
