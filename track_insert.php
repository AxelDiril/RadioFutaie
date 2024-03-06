<!DOCTYPE html>
<html >
  <head>
    <title>Ajout d'une musique</title>
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
    <h1>Ajout d'une musique</h1>
    <?php
      if (!empty($_POST['titre'])) {
      require 'connect.php';
      try {
          $db = new PDO(DNS, LOGIN, PASSWORD, $options);
          $sql = 'INSERT INTO RF_TRACK( name_track, filename_track, pathname_track) 
                  VALUES ( :nam, :fil,:pass)';
          $statement = $db->prepare($sql);
          $statement->bindParam('nam', $_POST['titre']);
          $statement->bindParam('fil', $_POST['fichier']);
          $pas="music/".$_POST['fichier'];
          $statement->bindParam('pass', $pas);
          
          $statement->execute();
      
          echo '<label>La musique ' . $_POST['titre'] . ' a bien été ajoutée</label><br><br>';
          echo "<a href='track_list.php'>Retour à l'index</a>";
          
          $statement->closeCursor();
          $db = null;
          
      } catch (PDOException $e) {
          die('echec :' . $e->getMessage());
      }
      }else {
          echo 'Le formulaire doit être entièrement rempli pour ajouter une musique.<br><br>';
          echo "<a href='track_add.php'>Retour à l'ajout d'une musique</a>";
      }
      ?>
    <footer>
      <p>&copy; 2024 RadioFutaie </p>
    </footer>
  </body>
</html>
