<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Suppression d'une musique</title>
    </head>
    <body>
        <?php
        require 'connect.php';

        if(!empty($_GET['id'])){
            $db = new PDO(DNS,LOGIN,PASSWORD,$options);
            $sql = "DELETE FROM RF_TRACK WHERE id_track = :id";
            $statement = $db->prepare($sql);
            
            $statement->bindParam('id', $_GET['id']);
            
            //Condition ternaire
            //$var = (condition)?valeurVraie:valeurFaux
            
            $statement->execute();
            
            echo "La musique a bien été supprimé.";

            }
            else{

                echo "Aucun musique a été choisi.";

            }
        
        ?>
    </body>
</html>
