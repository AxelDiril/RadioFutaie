<!doctype html>
<html>
  <head>
    <title>Ajout d'une musique</title>
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <?php
      //Vérifier si l'utilisateur est un administrateur connecté
      session_start();
      if($_SESSION['admin']!="A"){
          header('Location: index.php');
      }
      ?>
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
    <h2>Ajouter une musique</h2>
    <form action="track_insert.php" method="post" >
      <label for="titre">Titre :</label>
      <input type="text" name='titre' required><br>
      <label for="fichier">Nom du fichier :</label>
      <input type="file" name='fichier' accept="audio/wav, audio/mpeg, audio/ogg" ><br><br>
      <input type="submit" value="Inserer">
    </form>
    <footer>
      <p>&copy; 2024 RadioFutaie </p>
    </footer>
  </body>
</html>
