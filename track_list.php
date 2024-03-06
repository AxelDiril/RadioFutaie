<!doctype html>
<html>
<head>
    <title>Liste des musiques</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<header>

    <button onclick='https://falbala.futaie.org:8443/~metallica/RadioFutaie/index.php';>page de connexion</button>

    <?php
    //Rajouter l'option de suppression de playlist si l'utilisateur est un administrateur
                    if(isset($_SESSION['admin'])){
                       // echo "<button onclick='window.location.href = 'https://falbala.futaie.org:8443/~metallica/RadioFutaie/index.php'">page de connexion</button>";
                    }
                   
                

    ?>

</header>










    <?php
            //Vérifier si l'utilisateur est un administrateur connecté
            session_start();
            if($_SESSION['admin']==NULL){
                header('Location: index.php');
            }
        ?>

    <h1>Liste des musiques</h1>

    <table>
        <tr>
            <th>Titre</th>
            <th>Nom du fichier</th>
            <th>Chemin d'accès</th>
            <th>Total de votes</th>
            <th>Nombre de votes</th>
            <th>Action</th>
        </tr>

        <?php
            require 'connect.php';
            try {
                $db = new PDO(DNS, LOGIN, PASSWORD, $options);
                $sql = 'SELECT * FROM RF_TRACK ';
                $statement = $db->prepare($sql);
                $statement->execute();
                
                foreach($statement as $row){
                    echo '<tr>';
                    echo '<td>'.$row['name_track'].'</td>';
                    echo '<td>'.$row['filename_track'].'</td>';
                    echo '<td>'.$row['pathname_track'].'</td>';
                    echo '<td>'.$row['total_votes'].'</td>';
                    echo '<td>'.$row['nb_votes'].'</td>';
                    echo '<td><a href="track_delete.php?id='.$row['id_track'].'">Supprimer</a><br>';
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
</html>