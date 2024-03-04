<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
    </head>
    <body>
     
        <?php

        require 'connect.php';

        print_r($_POST);

        if ((!empty($_POST['titre']))AND(!empty($_POST['nickname_user'])){
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
            echo 'Oups ! modification raté veuillez recommencer svp';
        }
        ?>
    </body>
</html>