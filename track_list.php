<!doctype html>
<html>
<head>
    <title>Liste des musiques</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
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