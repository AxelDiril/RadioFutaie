<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Suppression d'une musique</title>
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
        <a href="playlist_add" class="btn">Ajout de playlists</a>
        <a href="track_list.php" class="btn">Liste de musiques</a>
        <a href="track_add.php" class="btn">Ajout de musiques</a>
        <a href="user_list.php" class="btn">Liste d'utilisateurs</a>
        <a href="contact.php" class="btn">Nous contacter</a>
      </nav>
    </header>
    <h1>Suppression d'une musique</h1>
    <?php
      require 'connect.php';
      
      if(!empty($_GET['id'])){
          $db = new PDO(DNS,LOGIN,PASSWORD,$options);
          $sql = "DELETE FROM RF_TRACK WHERE id_track = :id";
          $statement = $db->prepare($sql);
          
          $statement->bindParam('id', $_GET['id']);
          
          $statement->execute();
          
          $db->null;
          
          echo "La musique a bien été supprimée.<br><br>";
      
          }
          else{
      
              echo "Aucun musique n'a été choisie.<br><br>";
      
          }
      
          echo "<a href='track_list.php'>Retour à la liste des musiques</a>";
      
      ?>
    <footer>
      <p>&copy; 2024 RadioFutaie </p>
    </footer>
  </body>
</html>