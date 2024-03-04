<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>titre 2</title>
    </head>
    <body>
        <h1>Utilisateur</h1><br>bienvenue sur Radio Futaie<br>
        <?php

require 'connect.php';
        print_r($_POST);
        if ((!empty($_POST['email_user']))AND(!empty($_POST['nickname_user']))AND(!empty($_POST['lastname_user']))AND(!empty($_POST['password_user']))AND(!empty($_POST['phone_user']))AND(!empty($_POST['id_user']))){
            try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'UPDATE RF_USER
                    SET email_user = :mail, nickname_user = :surnom , firstname_user = :nom, lastname_user = :prenom, password_user = :mdp, phone_user = :tel WHERE id_user=:id)';
            $statement = $db->prepare($sql);
            $statement->bindParam('mail',$_POST['email_user']);
            $statement->bindParam('surnom',$_POST['nickname_user']);
            $statement->bindParam('nom',$_POST['firstname_user']);
            $statement->bindParam('prenom',$_POST['lastname_user']);
            $statement->bindParam('mdp',$_POST['password_user']);
            $statement->bindParam('tel',$_POST['phone_user']);
            $statement->bindParam('id',$_POST['id_user']);
            $statement->execute();
            
           echo  "l'utilisateur '" .$_POST['lastname_user']. " a bien été modifié <br><br>";

           
           
           $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
        }
        
        else{
            echo 'modification raté veuillez recommencer';
        }
        ?>
    </body>
</html>