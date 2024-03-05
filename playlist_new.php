<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Modification d'une playlist</title>
    </head>
    <body>

        <form action="playlist_update.php" method="POST"> 

       
 
    <label for="id_playlist"> selectionnez la playlist a modifié :</label>
        <select name="id_playlist" id="id_playlist">
        <option value=""> choisissez la playlist a modifié</option>

       <?php
       require 'connect.php';
       
       
       
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'SELECT id_playlist from RF_PLAYLIST';
            $statement = $db->prepare($sql);
            $statement->execute();
            foreach ($statement as $row) {
                echo '<option value="'.$row['id_playlist'].'">'.$row['id_Playlist'].'</option>';
                echo '<h1> Modification d/une playlist '. "</h1><br>";
            }
            
        ?> 
        </select>
      
  </select>
</form>

        <input type="submit"></input>

    </form>
        <?php

        ?>
    </body>
</html>