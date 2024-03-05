<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
    </head>
    <body>
     
        <?php

        require 'connect.php';

        if (!empty($_POST['titre'])){

            require 'connect.php';
            try {

            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'UPDATE RF_PLAYLIST (name_playlist, datetime_playlist)
                    VALUES (:titre, :date)';
                
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