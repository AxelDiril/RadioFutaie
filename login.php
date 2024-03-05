<!DOCTYPE html>
<html >
    <head>

        <title>login</title>
    </head>
    <body>
        <h1></h1><br><br>
        <?php
        if (!empty($_POST['login']) or !empty($_POST['password'])) {
        require 'connect.php';
        try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'SELECT password_user , nickname_user,code_role
                    FROM RF_USER
                    WHERE nickname_user= :nck';
            $statement = $db->prepare($sql);
            $statement->bindParam('nck', $_POST['login']);
            
            $statement->execute();
            $row = $statement->fetch();
            
            if(password_verify($_POST['password'], $row['password_user'])){
                echo 'Connexion réussie';
            }
            else {
                echo 'Identifiant ou mot de passe incorrect';
            }

            if ($row['code_role']=='U'){
                echo ' est un utilisateur ';
            }else{
                echo ' est un admin';
            }





            
            $statement->closeCursor();
            $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
        }else { 
            echo 'Le libellé doit être saisie !';
            echo "<a href='sign_in.php'>Retour à l'insersion</a>";
        }
        ?>
    <br><em>&copy; 2024</em>
</body>
</html>