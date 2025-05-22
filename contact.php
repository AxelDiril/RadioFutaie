<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Contact</title> 
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>

        <header>
          <a href="index.php"><img src="images/logo.png" alt="Logo de RadioFutaie"></a>
          <nav>
          <a href="index.php" class="btn">Connexion</a>
          <a href="login.php" class="btn">Accueil</a>
            
          <?php
          session_start();
          //Vérifier si l'utilisateur est connecté (utilisateur simple ou administrateur)
          if($_SESSION['admin']=='A'){
            echo "<a href='playlist_list.php' class='btn'>Liste de playlists</a>
            <a href='playlist_add.php' class='btn'>Ajout de playlists</a>
            <a href='track_list.php' class='btn'>Liste de musiques</a>
            <a href='track_add.php' class='btn'>Ajout de musiques</a>
            <a href='user_list.php' class='btn'>Liste d'utilisateurs</a>";
          }
        ?> 
      <a href="contact.php" class="btn">Nous contacter</a>
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

  <div class=container>
        <footer>
            <p>&copy; 2024 RadioFutaie </p>
        </footer>
  </div>
</body>
</html>