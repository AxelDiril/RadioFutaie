<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
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

        <h1>Inscription</h1>
        
        <?php

require 'connect.php';
        if ((!empty($_POST['email_user']))AND(!empty($_POST['nickname_user']))AND(!empty($_POST['lastname_user']))AND(!empty($_POST['password_user']))AND(!empty($_POST['phone_user']))){
            try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'INSERT INTO RF_USER(email_user, nickname_user, firstname_user, lastname_user, password_user, phone_user, code_role)
                    Values(:mail, :surnom, :nom, :prenom, :mdp, :tel, "U" )';
            $statement = $db->prepare($sql);
            $statement->bindParam('mail',$_POST['email_user']);
            $statement->bindParam('surnom',$_POST['nickname_user']);
            $statement->bindParam('nom',$_POST['firstname_user']);
            $statement->bindParam('prenom',$_POST['lastname_user']);
            $statement->bindParam('mdp',$_POST['password_user']);
            $statement->bindParam('tel',$_POST['phone_user']);
            $statement->execute();
            
           echo  "Votre compte a bien été créé. Vous pouvez désormais vous connecter sur la page principale.<br><br>";
           $statement->closeCursor();
           $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
        }
        
        else{
            echo "Echec de l'inscription. Veuillez remplir tous les champs.<br><br>";

        }
        ?>

        <a href='index.php'>Retour à la page principale</a>
    </body>
</html>