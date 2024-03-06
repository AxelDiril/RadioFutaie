<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Lecteur de playlist</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <?php
            //Vérifier si l'utilisateur est connecté (utilisateur simple ou administrateur)
            session_start();
            if($_SESSION['login']==NULL){
                header('Location: index.php');
            }
        ?>

        <h1>Lecteur de playlist</h1>

        <?php
        require 'connect.php';
        $db = new PDO(DNS, LOGIN, PASSWORD, $options);

        //Récupère la première musique (à modifier plus tard)

        $sql ='SELECT pathname_track FROM `RF_TRACK` WHERE id_track = 1';
        $statement = $db->prepare($sql);
        $statement->execute();
        $row=$statement->fetch();

        echo '<audio src="../'.$row["pathname_track"].'" id="audioPlayer" controls> </audio>';
        echo '<script>
                let audio = document.getElementById("audioPlayer");
                audio.onended = function() {
                alert("Un évènement se déclenche lorsque la musique se termine");
                };
                </script>'
    ?>
        <br><br><a href="playlist_list.php">Retour à la liste des playlists</a>

    </body>
 </html>

