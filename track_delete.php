<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Suppression d'une musique</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>

        <h1>Suppression d'une musique</h1>

        <?php
        require 'connect.php';

        if(!empty($_GET['id'])){
            $db = new PDO(DNS,LOGIN,PASSWORD,$options);
            $sql = "DELETE FROM RF_TRACK WHERE id_track = :id";
            $statement = $db->prepare($sql);
            
            $statement->bindParam('id', $_GET['id']);
            
            $statement->execute();
            
            echo "La musique a bien été supprimée.<br><br>";

            }
            else{

                echo "Aucun musique n'a été choisie.<br><br>";

            }

            echo "<a href='track_list.php'>Retour à la liste des musiques</a>";
        
        ?>
    </body>
</html>
