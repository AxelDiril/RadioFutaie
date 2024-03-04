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
        if (!empty($_POST['id_user'])AND (!empty($_POST['email_user']))AND(!empty($_POST['nickname_user']))AND(!empty($_POST['lastname_user']))AND(!empty($_POST['password_user']))AND(!empty($_POST['phone_user']))AND(!empty($_POST['code_role']))){
            try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'INSERT INTO RF_USER(id_user, email_user, nickname_user, firstname_user, lastname_user, password_user, phone_user, code_role)
                    Values(:id, :mail, :surnom, :nom, :prenom, :mdp, :tel, U )';
            $statement = $db->prepare($sql);
            $statement->bindParam('id',$_POST['id_user']);
            $statement->bindParam('mail',$_POST['email_user']);
            $statement->bindParam('surnom',$_POST['nickname_user']);
            $statement->bindParam('nom',$_POST['firstname_user']);
            $statement->bindParam('prenom',$_POST['lastname_user']);
            $statement->bindParam('mdp',$_POST['password_user']);
            $statement->bindParam('tel',$_POST['phone_user']);
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