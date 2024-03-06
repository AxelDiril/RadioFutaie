<!DOCTYPE html>
<html >
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>

        <h1>Accueil</h1>

        <?php
        if (!empty($_POST['login']) or !empty($_POST['password'])) {
        require 'connect.php';
        try {
            session_start(); //Création de la session

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
            

            if ($row['code_role']=='U'){

                // Utilisateur

                echo ' est un utilisateur ';

            }else{

                //Admnistrateur

                echo "<br><a href='track_list.php'>Pour voir toutes les musiques</a><br>";
                echo "<a href='track_add.php'>Pour rajouter des musiques</a><br>";
                echo "<a href='playlist_list.php'>Pour voir toutes les playlists</a><br>";
                echo "<a href='playlist_add.php'>Pour rajouter des playlists</a><br>";
                echo "<a href='user_list.php'>Pour voir tous les utisateurs</a><br>";
                
                //Si l'utilisateur est un administrateur, $_SESSION['admin'] est complété
                $_SESSION['admin'] = "A";
            }
        }
        else {
            echo 'Identifiant ou mot de passe incorrect <br><br>';
            echo "<a href='index.php'>Retour à la page de connexion</a>";
        }

            //Création d'une session utilisateur
            $_SESSION['login'] = $_POST['login'];

            $statement->closeCursor();
            $db = null;
        } catch (PDOException $e) {
            die('echec :' . $e->getMessage());
        }
        }else { 
            echo "Votre Login et mot de passe doivent être renseignés afin d'accéder à cette page.<br><br>";
            echo "<a href='index.php'>Retour à la page de connexion</a>";
        }
        ?>
</body>
</html>