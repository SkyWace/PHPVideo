<?php
require_once("ConnexionBDD.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        // Requête pour récupérer l'utilisateur correspondant à l'email
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        // Vérification du mot de passe
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($password, $row["password"])) {
                // Authentification réussie
                if ($row["admin"] == 1) {
                    // Utilisateur administrateur
                    // Redirection vers la page réservée aux administrateurs
                    header("Location: model/User_update.php");
                    exit();
                } else {
                    // Utilisateur non administrateur
                    // Affichage d'un message d'erreur ou redirection vers une autre page
                    echo "Accès restreint. Vous devez être administrateur pour accéder à cette page.";
                    header("Location: ../index.php");
                }
            } else {
                // Mot de passe incorrect
                $error = "Mot de passe incorrect.";
            }
        } else {
            // Utilisateur introuvable
            $error = "Aucun utilisateur trouvé avec cet email.";
        }

        // Afficher les erreurs
        echo "Erreur : " . $error . "<br>";
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
