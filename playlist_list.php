<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Liste des playlists</title>
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

    <table>
        <tr>
            <th>Identifiant</th>
            <th>Titre </th>
            <th>Date & Heure</th>
            <th>Action</th>
        </tr>
    

       <?php
         
        require 'connect.php';
        try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'SELECT *
                    FROM RF_PLAYLIST';
                
                $statement = $db->prepare($sql);
                $statement->execute();
                
                foreach($statement as $row){
                    echo '<tr>';
                    echo '<td>'.$row['id_playlist'].'</td>';
                    echo '<td>'.$row['name_playlist'].'</td>';
                    echo '<td>'.$row['datetime_playlist'].'</td>';
                    echo '<td><a href="music_player.php?id='.$row['id_playlist'].'">Lire</a><br>';

                    //Rajouter l'option de suppression de playlist si l'utilisateur est un administrateur
                    if(isset($_SESSION['admin'])){
                        echo '<a href="playlist_delete.php?id='.$row['id_playlist'].'">Supprimer</a>';
                    }
                    echo '</td>';
                    echo '</tr>';
                }
             
            echo '<h1> Liste des playlists '. "</h1>";
            echo '<h2> Nombre : '.$statement->rowCount().'</h2>';
            
            $statement->closeCursor();
            
            $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
           
        ?>

        </table>
    </body>
</html>
