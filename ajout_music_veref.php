<!DOCTYPE html>
<html >
    <head>

        <title>veref</title>
    </head>
    <body>
        <h1></h1><br><br>
        <?php
        if (!empty($_POST['name_track'])) {
        require 'connect.php';
        try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'INSERT INTO RF_TRACK( name_track, filename_track, pathname_track) 
                    VALUES ( :nam, :fil, "music/":fil)';
            $statement = $db->prepare($sql);
            $statement->bindParam('nam', $_POST['name_track']);
            $statement->bindParam('fil', $_POST['filename_track']);
            $statement->execute();

            echo '<label>La musique : ' . $_POST['titre'] . ' a bien été ajoutée</label><br><br>';
            echo "<a href='ajout_music.php'>Retour à l'index</a>";
            
            $statement->closeCursor();
            $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
        }else {
            echo 'Le libellé doive être saisie !';
            echo "<a href='ajout_music.php'>Retour à l'insersion</a>";
        }
        ?>
    <em>&copy; 2024</em>
</body>
</html>
