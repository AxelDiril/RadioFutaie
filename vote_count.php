<?php

require 'connect.php';
        if ((!empty($_POST['vote']))){
            try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'INSERT INTO RF_VOTE(vote_value, id_playlist, id_user id_track, datetime_vote)
                    Values(:vote, :playlist, :track, :user, :date)';
            $statement = $db->prepare($sql);
            $statement->bindParam('vote',$_POST['vote_value']);
            $statement->bindParam('id',$_POST['id_user']);
            $statement->bindParam('dat',$_POST['vote']);
            

            $statement->execute();
            echo  "Votre votre vote a bien été enregistré.<br><br>";

            
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
        }
        
        else{
            echo "Erreur sur la note veuillez contacter les administrateurs.<br><br>";
        }

        ?>