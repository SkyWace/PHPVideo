<?php
require_once 'User.php'; // Inclure la classe User

// Instancier la classe User
$user = new User();

// Vérifier si le formulaire a été soumis pour mettre à jour un utilisateur
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $user->update($id, $prenom, $email);
    header('Location: User_update.php'); // Rediriger vers la page principale
    exit; // Terminer le script pour éviter toute exécution supplémentaire
}

// Vérifier si le formulaire a été soumis pour supprimer un utilisateur
if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    $deletedRows = $user->delete($id);
    if ($deletedRows > 0) {
        echo "Utilisateur supprimé avec succès.";
    } else {
        echo "Aucun utilisateur trouvé avec cet ID.";
    }
    header('Location: User_update.php'); // Rediriger vers la page principale
    exit; // Terminer le script pour éviter toute exécution supplémentaire
}

// Récupérer l'ID de l'utilisateur à partir de la requête GET
$id = $_GET['id'];

// Récupérer l'utilisateur depuis la base de données
$userData = $user->read($id);

if ($userData) {
    // Afficher le formulaire d'édition de l'utilisateur
    echo "<h1>Modifier l'utilisateur</h1>";
    echo "<form method='post'>";
    echo "<input type='hidden' name='id' value='".$userData['id']."'>";
    echo "<label>Prenom:</label> <input type='text' name='prenom' value='".$userData['prenom']."'><br>";
    echo "<label>Email:</label> <input type='text' name='email' value='".$userData['email']."'><br>";
    echo "<input type='submit' name='update' value='Enregistrer'>";
    echo "</form>";

    // Afficher le bouton de suppression
    echo "<form method='post'>";
    echo "<input type='hidden' name='id' value='".$userData['id']."'>";
    echo "<input type='submit' name='delete' value='Supprimer'>";
    echo "</form>";
} else {
    echo "Aucun utilisateur trouvé avec cet ID.";
}
?>
