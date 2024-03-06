<!doctype html>
<html>
<head>
    <title>Liste des musiques</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<header>

    <button class="btn" onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/index.php"'>Connexion</button>
    <button class="btn" onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/login.php"'>Accueil</button>
    <button class="btn" onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/track_add.php"'>Pour rajouter des musiques</button>
    <button class="btn" onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/playlist_list.php"'>Pour voir toutes les playlists</button>
    <button class="btn" onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/playlist_add.php"'>Pour rajouter des playlists</button>
    <button class="btn" onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/user_list.php"'>Pour voir tous les utilisateurs</button>
 
</header>

 

    <?php
            //Vérifier si l'utilisateur est un administrateur connecté
            session_start();
            if($_SESSION['admin']==NULL){
                header('Location: index.php');
            }
        ?>

    <h1>Liste des musiques</h1>

    <table>
        <tr>
            <th>Titre</th>
            <th>Nom du fichier</th>
            <th>Chemin d'accès</th>
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
                    echo '<td>'.$row['pathname_track'].'</td>';
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
</body>
</html>