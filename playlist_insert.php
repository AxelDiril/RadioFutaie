<!doctype html>
<html>
  <head>
    <title>Ajout d'une playlist</title>
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
    <h1>Succès</h1>
    <?php
      if(!empty($_POST['titre'])){
      
       require 'connect.php';
       try {
          $db = new PDO(DNS, LOGIN, PASSWORD, $options);
          $sql = 'INSERT INTO RF_PLAYLIST (name_playlist, datetime_playlist)
              VALUES (:titre, :date)';
          $statement = $db->prepare($sql);
          $statement->bindParam('titre',$_POST['titre']);
          $date = date('Y/m/d h:i:s ', time());
          $statement->bindParam('date',$date);  
          $statement->execute();
          
          $sql2 = 'SELECT id_playlist FROM RF_PLAYLIST WHERE name_playlist = :name';
          $statement = $db->prepare($sql2);
          $statement->bindParam("name",$_POST['titre']);
          $statement->execute();
      
          $id_playlist = $statement->fetch();
      
          $sql3 = 'SELECT * FROM RF_TRACK ORDER BY total_votes DESC';
          $statement = $db->prepare($sql3);
          $statement->execute();
          $id_track = $statement->fetch();
      
          for($i= 1;$i <= $_POST['max'];$i++){
              $sql4 = 'INSERT INTO RF_CONTAIN VALUES (:id,"'.$id_track['id_track'].'",'.$i.')';
              $statement2 = $db->prepare($sql4);
              $statement2->bindParam("id",$id_playlist['id_playlist']);
              $statement2->execute();
              $id_track = $statement->fetch();
          }
      
          $statement->closeCursor();
          $db->null;
      
          echo "La playlist " .$_POST['titre'].  " a bien été générée.<br><br>";
          
          $db = null;
      } catch (PDOException $e) {
          die('echec :' . $e->getMessage());
      }
      }
      else {
          echo 'Certaines données sont manquantes.';
      }
      ?>
    <a href="playlist_add.php">Retour à l'ajout d'une playlist</a><br>
    <a href="playlist_list.php">Retour à la liste</a>
    <footer>
      <p>&copy; 2024 RadioFutaie </p>
      <p>Tous droits sont réservés</p>
    </footer>
  </body>
</html>
