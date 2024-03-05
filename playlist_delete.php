<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Suppression d'une playlist</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>

        <h1>Suppression d'une musique</h1>

        <?php
        require 'connect.php';

        if(!empty($_GET['id'])){

            $db = new PDO(DNS,LOGIN,PASSWORD,$options);
            $sql = "DELETE FROM RF_PLAYLIST WHERE id_playlist = :id";
            $statement = $db->prepare($sql);
            
            $statement->bindParam('id', $_GET['id']);
            $statement->execute();
            
            echo "La playlist a bien été supprimée.<br><br>";

            }
            else{

                echo "Aucune playlist n'a été choisie.<br><br>";

            }

            echo "<a href='playlist_list.php'>Retour à la suppression d'une playlist</a>"
        
        ?>
    </body>
</html>