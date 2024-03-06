<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Mise à jour d'une playlist</title>
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
     
        <?php

        require 'connect.php';

        if (!empty($_POST['titre'])){

            require 'connect.php';
            try {

            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'UPDATE RF_PLAYLIST (name_playlist, datetime_playlist)
                    VALUES (:titre, :date)'
                    WHERE id_user=:id)';
                
            $statement = $db->prepare($sql);
            $statement->bindParam('titre',$_POST['titre']);
            $statement->bindParam('datetime',$_POST['datetime']);
            $statement->execute();
            
           echo  "la playlist '" .$_POST['titre']. " a bien été modifiée <br><br>";

           
           
           $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
        }
        
        else{
            echo '<h1> Oups !'. "</h1><br>";
            echo 'modification raté veuillez recommencer svp';
        }
        ?>
    </body>
</html>