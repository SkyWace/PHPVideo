<?php
require_once 'User.php'; // Inclure la classe User

// Instancier la classe User
$user = new User();

// Vérifier si le formulaire a été soumis pour mettre à jour un utilisateur
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user->update($id, $name, $email);
    header('Location: ../index.html'); // Rediriger vers la page principale
}

// Récupérer l'ID de l'utilisateur à partir de la requête GET
$id = $_GET['id'];

// Récupérer l'utilisateur depuis la base de données
$userData = $user->read($id);

// Afficher le formulaire d'édition de l'utilisateur
echo "<h1>Modifier l'utilisateur</h1>";
echo "<form method='post'>";
echo "<input type='hidden' name='id' value='".$userData['id']."'>";
echo "<label>Nom:</label> <input type='text' name='name' value='".$userData['firstname']."'><br>";
echo "<label>Email:</label> <input type='text'name='email' value='".$userData['username']."'><br>";
echo "<input type='submit' name='update' value='Enregistrer'>";
echo "</form>";
?>

