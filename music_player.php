<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Lecteur de playlist</title>
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <?php
      //Vérifier si l'utilisateur est connecté (utilisateur simple ou administrateur)
      session_start();
      if($_SESSION['login']==NULL){
          header('Location: index.php');
      }
      ?>
    <header>
      <a href="index.php"><img src="images/logo.png" alt="Logo de RadioFutaie"></a>
      <nav>
        <a href="index.php" class="btn">Connexion</a>
        <a href="login.php" class="btn">Accueil</a>
        <?php
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
    <h1>Lecteur de playlist</h1>
    <?php
      if(isset($_GET['id'])){
          require 'connect.php';
          $db = new PDO(DNS, LOGIN, PASSWORD, $options);
      
          //Récupère la première musique (à modifier plus tard)
      
          $sql ='SELECT name_track, pathname_track FROM RF_TRACK TR INNER JOIN RF_CONTAIN CO ON TR.id_track = CO.id_track WHERE id_playlist = :id';
          $statement = $db->prepare($sql);
          $id_playlist = $_GET['id'];
          $statement->bindParam("id",$id_playlist);
          $statement->execute();
      
          foreach($statement as $row){
              $track_names[] = $row['name_track'];
              $tracks[] = $row['pathname_track']; 
          }
      
          echo "<h2 id='titre'>Musique N°1 : '".$track_names[0]."'</h2>";
      
          echo '<div><audio id="audioPlayer" src="../'.$tracks[0].'" controls>
          </audio></div><br>';
      
      }
      else{
          echo "Veuillez sélectionner une playlist.";
      }
      ?>
    <script>
      let audio = document.getElementById('audioPlayer');
      let tracks = <?php echo json_encode($tracks) ?>;
      let track_names = <?php echo json_encode($track_names) ?>;
      let current_track = 0;
      
      audio.onended = function() { 
          current_track = current_track + 1;
          if(current_track == tracks.length){
              current_track = 0;
          }
          let path = '../' + tracks[current_track];
      
          document.getElementById('titre').innerText = "Musique N°"+ (current_track + 1) + " : " + track_names[current_track];
          audio.setAttribute('src', path);
          audio.load();
          audio.play();
      }
    </script>
    <br>
    <p><a href="playlist_list.php">Retour à la liste des playlists</a></p>
    <footer>
      <p>&copy; 2024 RadioFutaie </p>
    </footer>
  </body>
</html>
