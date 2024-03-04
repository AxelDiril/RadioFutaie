<!doctype html>
<html>
<head>
    <title>Succès</title>
</head>
<body>
        <h1>Succès</h1>

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
            echo 'Les deux libellés doivent être saisis ! <br><br> ';
        }
        ?>

        <ul>
        <li><a href="playlist_add.php">Retour à l'ajout d'une playlist</a></li>
        <li><a href="playlist_list.php">Retour à la liste</a></li> 
        </ul>

</body>
</html>