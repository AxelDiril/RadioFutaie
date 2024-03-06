<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Ajout d'une playlist</title>
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <header>
      <a href="index.php"><img src="images/logo.png" alt="Logo de RadioFutaie"></a>
      <nav>
        <a href="index.php" class="btn">Connexion</a>
        <a href="login.php" class="btn">Accueil</a>
        <a href="playlist_list.php" class="btn">Liste de playlists</a>
        <a href="playlist_add.php" class="btn">Ajout de playlists</a>
        <a href="track_list.php" class="btn">Liste de musiques</a>
        <a href="track_add.php" class="btn">Ajout de musiques</a>
        <a href="user_list.php" class="btn">Liste d'utilisateurs</a>
        <a href="contact.php" class="btn">Nous contacter</a>
      </nav>
    </header>
    <?php
      //Vérifier si l'utilisateur est un administrateur connecté
      session_start();
      if($_SESSION['admin']!="A"){
          header('Location: index.php');
      }
      ?>
    <h1>Ajout d'une playlist</h1>
    <form action="playlist_insert.php" method="post">
      <label for='titre'>Titre : </label>
      <input type='text' id='titre' name='titre' minlength="1" maxlength="255" size='50' required><br> 
      <label for='max'>Nombre de musiques à ajouter : </label>
      <input type='number' id='max' name='max' required><br><br>
      <input type='submit' value='Générer'>
    </form>
    <footer>
      <p>&copy; 2024 RadioFutaie </p>
    </footer>
  </body>
</html>
