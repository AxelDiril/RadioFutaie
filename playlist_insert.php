<!doctype html>
<html>
<head>
    <title>Ajout d'une playlist</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
        <h1>Ajout d'une playlist</h1>

        <?php

        if(!empty($_POST['titre'])){
        
         require 'connect.php';
         try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'INSERT INTO RF_PLAYLIST (name_playlist, datetime_playlist)
                    VALUES (:titre, :date)';
            $statement = $db->prepare($sql);
            $statement->bindParam('titre',$_POST['titre']);
            $statement->bindParam('date',$_POST['datetime']); 
            $statement->execute();
            
            echo "La playlist " .$_POST['titre'].  " a bien été ajoutée <br><br>";
            
                
             $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
        }
        else {
            echo 'Veuillez remplir tous les champs pour ajouter une musique.<br><br> ';
        }
        ?>

        <a href="playlist_add.php">Retour à l'ajout d'une playlist</a><br>
        <a href="playlist_list.php">Retour à la liste des playlists</a>

</body>
</html>