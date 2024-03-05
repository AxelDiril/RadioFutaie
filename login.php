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
            $sql = 'SELECT password_user , nickname_user,code_role,firstname_user,lastname_user
                    FROM RF_USER
                    WHERE nickname_user= :nck';
            $statement = $db->prepare($sql);
            $statement->bindParam('nck', $_POST['login']);
            
            $statement->execute();
            $row = $statement->fetch();
            
            if(password_verify($_POST['password'], $row['password_user'])){
                echo 'Bienvenue '.$row['firstname_user'].' '.$row['lastname_user'];
            }
            else {
                echo 'Identifiant ou mot de passe incorrect';
            }

            if ($row['code_role']=='U'){
                echo ' est un utilisateur ';













            }else{

                echo "<br><a href='track.php'>Pour voir toutes les musiques</a>";
                echo "<br><a href='ajout_music.php'>Pour rajouter des musiques</a>";
                echo "<br><a href='playlist_list.php'>Pour voir toutes les playlists</a>";
                echo "<br><a href='playlist_add.php'>Pour rajouter des playlists</a>";
                echo "<br><a href='user_list.php'>Pour voir tous les utisateurs</a>";
                

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


        $_SESSION['login'] = $_POST['login'];
        echo $_SESSION['login'];
        ?>
    <br><em>&copy; 2024</em>
</body>
</html>