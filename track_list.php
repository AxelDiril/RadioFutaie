<!doctype html>
<html>
<head>
    <title>Liste des musiques</title>
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

    <h1>Liste des musiques</h1>

    <table>
        <tr>
            <th>Titre</th>
            <th>Nom du fichier</th>
            <th>Total de votes</th>
            <th>Nombre de votes</th>
            <th>Action</th>
        </tr>

        <?php
            require 'connect.php';
            try {
                $db = new PDO(DNS, LOGIN, PASSWORD, $options);
                $sql = 'SELECT * FROM RF_TRACK ';
                $statement = $db->prepare($sql);
                $statement->execute();
                
                foreach($statement as $row){
                    echo '<tr>';
                    echo '<td>'.$row['name_track'].'</td>';
                    echo '<td>'.$row['filename_track'].'</td>';
                    echo '<td>'.$row['total_votes'].'</td>';
                    echo '<td>'.$row['nb_votes'].'</td>';
                    echo '<td><a href="track_delete.php?id='.$row['id_track'].'">Supprimer</a><br>';
                    echo '</tr>';
                }

                $statement->closeCursor();
                $db = null;

            } catch (PDOException $e) {
                die('echec :' . $e->getMessage());
            }      
            
        ?>
    </table>
    <footer>
        <p>&copy; 2024 RadioFutaie </p>
        <p>Tous droits sont réservés</p>
    
    </footer>
</body>
</html>