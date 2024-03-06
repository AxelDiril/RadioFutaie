<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Contact</title>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<header>
        <h1>RadioFutaie</h1>
        <nav>
        
                <a href="index.php" class="btn">Connexion</a>
                
        </nav>
    </header>

  <main>
    <h1>Formulaire de contact</h1>
    <p>N'hésitez pas à nous contacter pour toute question ou remarque.</p>

    <form action="contact_form.php" method="post">
      <label for="name">Nom : </label>
      <input type="text" id="name" name="name" required><br>
      <label for="email">Email : </label>
      <input type="email" id="email" name="email" required><br>
      <label for="message">Message : </label>
      <textarea id="message" name="message" required></textarea><br>
      <input type="submit" value="Envoyer">
    </form>

    <p>** Informations de contact **</p>
    <p>Téléphone : +33 1 23 45 67 89</p>
    <p>Email : contact@radiofutaie.com</p>
  </main>

  <footer>
    <p>&copy; 2024 RadioFutaie</p>
    <p>Tous droits réservés</p>
  </footer>
</body>
</html>