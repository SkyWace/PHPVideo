<?php
// Connexion à la base de données
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "phpvideo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // On définit le mode d'erreur PDO à exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des données du formulaire
    $email = $_POST['email'];
    $lastname = $_POST['nom'];  
    $firstname = $_POST['prenom'];
    $plain_password = $_POST['password'];
    $admin = isset($_POST['admin']) ? 0 : 1;

    $hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);

    // Obtention de la date du jour
    $dateCreation = date('Y-m-d');

    // Préparation de la requête SQL pour insérer l'utilisateur dans la base de données
    $stmt = $conn->prepare("INSERT INTO users (nom, prenom, email, password, admin, dateCreation) 
                            VALUES (:nom, :prenom, :email, :password, :admin, :dateCreation)");
    $stmt->bindParam(':nom', $lastname);
    $stmt->bindParam(':prenom', $firstname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':admin', $admin);
    $stmt->bindParam(':dateCreation', $dateCreation);
    $stmt->execute();

    $lastInsertedId = $conn->lastInsertId();

    echo "Nouvel utilisateur créé avec succès. ID : " . $lastInsertedId;
    header("Location: ../index.php");  
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Fermeture de la connexion à la base de données
$conn = null;
?>
