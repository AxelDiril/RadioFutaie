<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Liste des playlists</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>

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
                    echo '<td><a href="playlist_delete.php?id='.$row['id_playlist'].'">Supprimer</a><br>';
                    echo '<a href="playlist_update.php?id='.$row['id_playlist'].'">Modifier</a><br>';
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
