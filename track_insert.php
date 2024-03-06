<!DOCTYPE html>
<html >
    <head>
        <title>Ajout d'une musique</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>

    <?php
            //Vérifier si l'utilisateur est un administrateur connecté
            session_start();
            if($_SESSION['admin']==NULL){
                header('Location: index.php');
            }
        ?>

        <h1>Ajout d'une musique</h1>
        
        <?php
        if (!empty($_POST['titre'])) {
        require 'connect.php';
        try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'INSERT INTO RF_TRACK( name_track, filename_track, pathname_track) 
                    VALUES ( :nam, :fil,:pass)';
            $statement = $db->prepare($sql);
            $statement->bindParam('nam', $_POST['titre']);
            $statement->bindParam('fil', $_POST['fichier']);
            $pas="music/".$_POST['fichier'];
            $statement->bindParam('pass', $pas);
            
            $statement->execute();

            echo '<label>La musique ' . $_POST['titre'] . ' a bien été ajoutée</label><br><br>';
            echo "<a href='track_list.php'>Retour à l'index</a>";
            
            $statement->closeCursor();
            $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
        }else {
            echo 'Le formulaire doit être entièrement rempli pour ajouter une musique.<br><br>';
            echo "<a href='track_add.php'>Retour à l'ajout d'une musique</a>";
        }
        ?>
</body>
</html>
