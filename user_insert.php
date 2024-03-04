<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>titre 2</title>
    </head>
    <body>
        <h1>Soirée</h1><br>on ajoute une soirée<br>
        <?php

require 'connect.php';
        print_r($_POST);
        if (!empty($_POST['id_user'])AND (!empty($_POST['mail_user']))AND(!empty($_POST['nickname_user']))AND(!empty($_POST['lastname_user']))AND(!empty($_POST['password_user']))AND(!empty($_POST['phone_user']))){
            try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'INSERT INTO RF_USER(id_user, mail_user, nickname_user, firstname_user, lastname_user, password_user, phone_user)
                    Values(:id, :mail, :surnom, :nom, :prénom, :mdp, :tel )';
            $statement = $db->prepare($sql);
            $statement->bindParam('id',$_POST['id_user']);
            $statement->bindParam('mail',$_POST['mail_user']);
            $statement->bindParam('surnom',$_POST['nickname_user']);
            $statement->bindParam('nom',$_POST['firstname_user']);
            $statement->bindParam('Prénom',$_POST['lastname_user']);
            $statement->bindParam('nom',$_POST['password_user']);
            $statement->bindParam('nom',$_POST['phone_user']);
            $statement->execute();
            
           echo  "la classe" .$_POST['id_user']. "a bien été ajoutée <br><br>";
           echo "<a href='index.php'>ajout d'une classe </a><br><br>";
           
           
           $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
        }
        
        else{
            echo 'les 2 libelle doivent etre saisie';
        }
        ?>
    </body>
</html>