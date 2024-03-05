<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Suppression d'un utilisateur</title>
        <link rel="stylesheet" href="styles/style.css">
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
            
            echo "L'utilisateur a bien été supprimé.<br><br>";

            }
            else{

                echo "Aucun utilisateur a été choisi.<br><br>";

            }
        
            echo "<a href='user_list.php'>Retour à la liste des utilisateurs</a>";
        ?>
    </body>
</html>
