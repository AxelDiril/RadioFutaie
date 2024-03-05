<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Playlist</title>
        <style>

table
{
	border: 1px solid black;
	border-collapse: collapse;
}

th
{
	border: 1px solid black;
	color: black;
    	padding: 5px; 
}
td
{
	border: 1px solid black;
    	padding: 5px;
		text-align:center;
}

</style>
    </head>
    <body>
       
    <table>
        <tr>
            <th> Identifiant </th>
            <th> Titre </th>
            <th> Date & Heure </th>
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
                    echo '</tr>';
                }
             
            echo '<h1> Liste des playlists '. "</h1><br>";
            echo '<h2> Nombre : '.$statement->rowCount().'</h2><br>';
            
            $statement->closeCursor();
            
            $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
           
        ?>

        </table>
    </body>
</html>
