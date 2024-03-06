<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <header>
      <a href="index.php"><img src="images/logo.png" alt="Logo de RadioFutaie"></a>
      <nav>
        <a href="index.php" class="btn">Connexion</a>
        <a href="login.php" class="btn">Accueil</a>
        <a href="contact.php" class="btn">Nous contacter</a>
      </nav>
    </header>
    <h1>Inscription</h1>
    <form action="user_insert.php" method="POST">
      <!--required oblige a ecrire une donnée-->
      <label for="email_user">E-mail</label>
      <input type="email" id="email_user" name="email_user"
        required  minlength="5" maxlength="23" size="21"/><br><br>
      <label for="nickname_user">Surnom</label>
      <input type="text" id="nickname_user" name="nickname_user"
        required  minlength="2" maxlength="20" size="21"/><br><br>
      <label for="firstname_user">Nom</label>
      <input type="text" id="firstname_user" name="firstname_user"
        required  minlength="2" maxlength="20" size="21"/><br><br>
      <label for="lastname_user">Prénom</label>
      <input type="text" id="lastname_user" name="lastname_user"
        required  minlength="2" maxlength="20" size="21"/><br><br>
      <label for="password_user">Mot de passe</label>
      <input type="password" id="password_user" name="password_user"
        required  minlength="12" maxlength="20" size="21"/><br><br>
      <label for="phone_user">Téléphone</label>
      <input type="text" id="phone_user" name="phone_user"
        required  minlength="10" maxlength="10" size="21"/><br><br>
      <input type="submit" value="Valider">
    </form>
    <footer>
      <p>&copy; 2024 RadioFutaie </p>
    </footer>
  </body>
</html>
