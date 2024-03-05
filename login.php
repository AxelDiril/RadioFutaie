<!DOCTYPE html>
<html >
    <head>

        <title>login</title>
    </head>
    <body>
        <h1></h1><br><br>
        <?php
       // if (!empty($_POST['idlogin']) or !empty($_POST['idpassword'])) {
        require 'connect.php';
        try {
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'SELECT password_user , nickname_user 
                    FROM RF_USER
                    WHERE nickname_user= :nck';
            $statement = $db->prepare($sql);
            $statement->bindParam('nck', $_POST['idlogin']);
            
            $statement->execute();
            
            if(password_verify($_POST['idpassword'], $row['password'])){
                echo 'Connexion réussie';
            }
            else {
                echo 'Identifiant ou mot de passe incorrect';
            }
            
            $statement->closeCursor();
            $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
        /*}else {
            echo 'Le libellé doit être saisie !';
            echo "<a href='sign_in.php'>Retour à l'insersion</a>";
        }*/
        ?>
    <em>&copy; 2024</em>
</body>
</html>