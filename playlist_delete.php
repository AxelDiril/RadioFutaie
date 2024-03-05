<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Suppression d'une playlist</title>
    </head>
    <body>
        <?php
        require 'connect.php';

        if(!empty($_GET['id'])){

            $db = new PDO(DNS,LOGIN,PASSWORD,$options);
            $sql = "DELETE FROM RF_PLAYLIST WHERE id_playlist = :id";
            $statement = $db->prepare($sql);
            
            $statement->bindParam('id', $_GET['id']);
            $statement->execute();
            
            echo "La playlist a bien été supprimée.";

            }
            else{

                echo "Aucune playlist a été choisie .";

            }
        
        ?>
    </body>
</html>