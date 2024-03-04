<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Suppression d'un utilisateur</title>
    </head>
    <body>
        <?php
        require 'connect.php';

        if(!empty($_GET['id'])){
            $db = new PDO(DNS,LOGIN,PASSWORD,$options);
            $sql = "DELETE FROM RF_USER WHERE id_user = :id";
            $statement = $db->prepare($sql);
            
            $statement->bindParam('id', $_GET['id']);
            
            //Condition ternaire
            //$var = (condition)?valeurVraie:valeurFaux
            
            $statement->execute();
            
            echo "L'utilisateur a bien été supprimé.";

            }
            else{

                echo "Aucun utilisateur a été choisi.";

            }
        
        ?>
    </body>
</html>
