<?php

require 'connect.php';
        if ((!empty($_POST['value_vote'])) AND (!empty($_POST['datetime_vote']))){
            try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'INSERT INTO RF_VOTE(id_playlist, id_user, id_track, datetime_vote, value_vote)
                    Values("800", "800", "800", :datev, :vote)';
            $statement = $db->prepare($sql);
            $statement->bindParam('vote',$_POST['value_vote']);
            $statement->bindParam('datev',$_POST['datetime_vote']);
            $statement->execute();
            echo  "Votre vote a bien été enregistré.<br><br>";
            $statement->closeCursor();
                        $db = null;   
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
        }
        
        else{
            echo "Erreur sur la note veuillez contacter les administrateurs.<br><br>";
        }

        ?>