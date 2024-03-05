<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Mise à jour de l'utilisateur</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <h1>Mise à jour de l'utilisateur</h1>
        <?php
        
        require 'connect.php';
        if ((!empty($_POST['email_user']))AND(!empty($_POST['nickname_user']))AND(!empty($_POST['lastname_user']))AND(!empty($_POST['password_user']))AND(!empty($_POST['phone_user']))AND(!empty($_POST['id_user']))){
            try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'UPDATE RF_USER
                    SET email_user = :mail, nickname_user = :surnom, firstname_user = :nom, lastname_user = :prenom, password_user = :mdp, phone_user = :tel, WHERE id_user=:id';
            $statement = $db->prepare($sql);
            $statement->bindParam('mail',$_POST['email_user']);
            $statement->bindParam('surnom',$_POST['nickname_user']);
            $statement->bindParam('nom',$_POST['firstname_user']);
            $statement->bindParam('prenom',$_POST['lastname_user']);
            $statement->bindParam('mdp',$_POST['password_user']);
            $statement->bindParam('tel',$_POST['phone_user']);
            $statement->bindParam('id',$_POST['id_user']);
            $statement->execute();
            
           echo  "L'utilisateur " .$_POST['lastname_user']. " a bien été modifié <br><br>";

            
           
           $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }        
    
        }
        else{
            echo 'Veuillez remplir tous les champs pour modifier cet utilisateur.<br><br>';
        }

            echo "<a href='user_list.php'>Retour à la suppression d'une musique</a>";

        ?>

    </body>
</html>