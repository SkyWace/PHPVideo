<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire d'inscription</title>
</head>
<header class="FormConnexion">
    <?php
    require ("header.php");
    ?>
  </header>
<body class="login-inscription">
    <main class="Login-Form">
    <form action="Form-Inscription.php" id="inscription-form" method="post">
        <label for="nom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <label for="prenom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <label for="password-confirm">Confirmer mot de passe :</label>
        <input type="password" id="password-confirm" name="password-confirm" required>
        <label for="admin">Admin :</label>
        <input type="hidden" id="admin" name="admin">
        <div id="error-message"></div>
        <input type="submit" value="S'inscrire">
      </form>
      <div class="signin-link">
        <p>Déjà un compte ? <a href="SignIn.php">Connectez-vous</a></p>
      </div>
    </main>
    <footer>
    <?php
    require ("footer.php"); 
    ?>
  </footer>
  <script>
let password = document.getElementById("password");
let passwordConfirm = document.getElementById("password-confirm");
let submitButton = document.getElementById("inscription-form").querySelector('input[type="submit"]');

submitButton.addEventListener("click", function (event) {
  if (password.value != passwordConfirm.value) {
    event.preventDefault();
    password.style.borderColor = "red";
    passwordConfirm.style.borderColor = "red";
    alert("Les deux mots de passe ne correspondent pas !");
  }
});

// Get the password and confirm password fields
const passwordField = document.getElementById("password");
const confirmPasswordField = document.getElementById("password-confirm");

// Get the error message element
const errorMessage = document.getElementById("error-message");

// Check if the passwords match when the form is submitted
document.getElementById("inscription-form").addEventListener("submit", (event) => {
  if (passwordField.value !== confirmPasswordField.value) {
    // Display the error message and add the error class
    errorMessage.textContent = "Les mots de passe ne correspondent pas.";
    errorMessage.classList.add("error-message");
    
    // Prevent the form submission
    event.preventDefault();
  }
});

// Get the nom field
const nomField = document.getElementById("nom");

// Add an input event listener to the nom field for validation
nomField.addEventListener("input", function(event) {
  const nomValue = nomField.value;
  
  if (!/^[a-zA-Z]*$/.test(nomValue)) {
    nomField.style.borderColor = "red";
    alert("Des caractères ne sont pas correctes dans le nom");
  } else {
    nomField.style.borderColor = "";
  }
});

const prenomField = document.getElementById("prenom");

// Add an input event listener to the nom field for validation
prenomField.addEventListener("input", function(event) {
  const prenomValue = prenomField.value;
  
  if (!/^[a-zA-Z]*$/.test(prenomValue)) {
    prenomField.style.borderColor = "red";
    alert("Des caractères ne sont pas correctes dans le prenom");
  } else {
    prenomField.style.borderColor = "";
  }
});
        </script>
    </body>
</html>