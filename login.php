<!DOCTYPE html>
<html >
  <head>
    <title>Connexion</title>
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <?php
      session_start(); //Création de la session
      
      if (!empty($_POST['login']) or !empty($_POST['password']) ) {
          require 'connect.php';
          try {
      
      
              $db = new PDO(DNS, LOGIN, PASSWORD, $options);
              $sql = 'SELECT password_user , nickname_user,code_role,firstname_user,lastname_user
                      FROM RF_USER
                      WHERE nickname_user= :nck';
              $statement = $db->prepare($sql);
              $statement->bindParam('nck', $_POST['login']);
              
              $statement->execute();
              $row = $statement->fetch();
              
              if(password_verify($_POST['password'], $row['password_user'])){
                  if ($row['code_role']=='U'){
      
                  // Utilisateur
              
                  $_SESSION['admin'] = 'U';
      
                  }else{
      
                  //Admnistrateur 
                  
                  $_SESSION['admin'] = "A";
      
                  }
              }
      
                  //Création d'une session utilisateur
                  $_SESSION['login'] = $_POST['login'];
      
                  $statement->closeCursor();
                  $db = null;
          } catch (PDOException $e) {
              die('echec :' . $e->getMessage());
          }
      }
      
      if(empty($_SESSION['admin'])){
          echo "<header>
              <a href='index.php'><img src='images/logo.png' alt='Logo de RadioFutaie'></a>
                  <nav>
                      <a href='index.php' class='btn'>Connexion</a>
                      <a href='contact.php' class='btn'>Nous contacter</a>
              </nav>
          </header>";
      
          echo "Votre Login et/ou mot de passe sont incorrects.<br><br>";
          echo "<a href='index.php'>Retour à la page de connexion</a>";
      }
      else if($_SESSION['admin']=='A'){
      
                  echo "<header>
                      <a href='index.php'><img src='images/logo.png' alt='Logo de RadioFutaie'></a>
                          <nav>
                              <a href='index.php' class='btn'>Connexion</a>
                              <a href='login.php' class='btn'>Accueil</a>
                              <a href='playlist_list.php' class='btn'>Liste de playlists</a>
                              <a href='playlist_add.php' class='btn'>Ajout de playlists</a>
                              <a href='track_list.php' class='btn'>Liste de musiques</a>
                              <a href='track_add.php' class='btn'>Ajout de musiques</a>
                              <a href='user_list.php' class='btn'>Liste d'utilisateurs</a>
                              <a href='contact.php' class='btn'>Nous contacter</a>
                          </nav>
                  </header>";
      
                  echo "<h1>Accueil</h1>
                  <h2> RadioFutaie : Votre univers musical personnel </h2>";
      
                  echo "<a href='playlist_list.php'>Voir toutes les playlists</a><br>";
                  echo "<a href='playlist_add.php'>Ajouter des playlists</a><br>";
                  echo "<a href='track_list.php'>Voir toutes les musiques</a><br>";
                  echo "<a href='track_add.php'>Ajouter des musiques</a><br>";
                  echo "<a href='user_list.php'>Voir tous les utisateurs</a><br>";
                  
      }else if($_SESSION['admin']=='U'){
      
                  echo "<header>
                      <a href='index.php'><img src='images/logo.png' alt='Logo de RadioFutaie'></a>
                          <nav>
                              <a href='index.php' class='btn'>Connexion</a>
                              <a href='login.php' class='btn'>Accueil</a>
                              <a href='playlist_list.php' class='btn'>Liste de playlists</a>
                              <a href='contact.php' class='btn'>Nous contacter</a>
                          </nav>
                  </header>";
      
                  echo "<h1>Accueil</h1>
                  <h2> RadioFutaie : Votre univers musical personnel </h2>";
      
                  echo "<a href='playlist_list.php'>Voir toutes les playlists</a><br>";
      }
      
      ?>
    <div class=container>
        <footer>
            <p>&copy; 2024 RadioFutaie </p>
        </footer>
    </div>
  </body>
</html>
