<!DOCTYPE html>
<html >
    <head>

        <title>login</title>
    </head>
    <body>
        <h1></h1><br><br>
        <?php
        if (!empty($_POST[''])) {
        require 'connect.php';
        try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = '';
            $statement = $db->prepare($sql);
            $statement->bindParam('nam', $_POST['titre']);
            $statement->bindParam('fil', $_POST['fichier']);
            
            
            $statement->execute();
            
            echo '<label>La musique ' . $_POST['titre'] . ' a bien été ajoutée</label><br><br>';
            echo "<a href='ajout_music.php'>Retour à l'index</a>";
            
            $statement->closeCursor();
            $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
        }else {
            echo 'Les libellés doive être saisie !';
            echo "<a href='ajout_music.php'>Retour à l'insersion</a>";
        }
        ?>
    <em>&copy; 2024</em>
</body>
</html>