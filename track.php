<!doctype html>
<html>
<head>
    <title>track</title>
</head>
<body>
    <h1>track</h1>
        

    <table>
        <tr>
            <th>titre</th>
                <th>|</th>
                <th>filname</th>
                <th>|</th>
                <th>pathname</th>
                <th>|</th>
                <th>total</th>
                <th>|</th>
                <th>nb</th>
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
                    echo'<td>|</td>';
                    echo '<td>'.$row['filename_track'].'</td>';
                    echo'<td>|</td>';
                    echo '<td>'.$row['pathname_track'].'</td>';
                    echo'<td>|</td>';
                    echo '<td>'.$row['total_votes'].'</td>';
                    echo'<td>|</td>';
                    echo '<td>'.$row['nb_votes'].'</td>';
                    echo'<td>|</td>';
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
        <br>
        <br>
    <em>&copy; 2024</em>
</body>
</html>