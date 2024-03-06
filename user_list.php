<!doctype html>
<html lang=fr>
<head>
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<header>

    <button onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/index.php"'>page de connexion</button>
    <button onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/login.php"'>home</button>

</header>

<?php
            //Vérifier si l'utilisateur est un administrateur connecté
            session_start();
            if($_SESSION['admin']==NULL){
                header('Location: index.php');
            }
        ?>

    <h1>Liste des utilisateurs</h1>
    <table>
        <tr>
            <th>Pseudonyme</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Adresse Mail</th>
            <th>Téléphone</th>
            <th>Mot de passe</th>
            <th>Action</th>
        </tr>
        <?php
            require 'connect.php';

                try {
                    $db = new PDO(DNS, LOGIN, PASSWORD, $options);
                    $sql = 'SELECT * FROM `RF_USER`';
                    $statement = $db->prepare($sql);
                    $statement->execute();

                    foreach ($statement as $row) {
                        echo '<tr>';
                        echo '<td>'.$row['nickname_user'].'</td>';
                        echo '<td>'.$row['firstname_user'].'</td>';
                        echo '<td>'.$row['lastname_user'].'</td>';
                        echo '<td>'.$row['email_user'].'</td>';
                        echo '<td>'.$row['phone_user'].'</td>';
                        echo '<td>'.$row['password_user'].'</td>';
                        echo '<td><a href="user_delete.php?id='.$row['id_user'].'">Supprimer</a><br>';
                        echo '</tr>';
                    }

                    $statement->closeCursor();
                    $db = null;
                    } catch (PDOException $e) {
                        die('echec :' . $e->getMessage());
                    }
        ?>
    </table>
</body>