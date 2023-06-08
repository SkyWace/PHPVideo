<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de connexion</title>
</head>
<header class="FormConnexion">
    <?php
    require ("../header.php");
    require ("../Css.php");
    ?>
  </header>
<body>
    <main>
    <section class="banner-area-SignIn banner-bg-SignIn">
    <form class="Form" action="FormConnexion.php" d="login-form" method="post">
      <label for="email">Email : </label>
      <input type="email" id="email" name="email" required>
      <label for="password">Mot de passe :</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="Se connecter">
      <div class="signup-link">
        <p>Pas encore de compte ? <a href="inscription.php">Inscrivez-vous</a>.</p>
      </div>
    </form>
</section>
  </main>
  <footer>
    <?php
    require ("../footer.php"); 
    ?>
  </footer>
</body>

</html>