<!doctype html>
<html>
<head>
    <title>Ajout d'une musique</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

    <header>

    <button onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/index.php"'>page de connexion</button>
    <button onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/login.php"'>home</button>
    <button onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/track_list.php"'>Pour voir tous les musiques</button>
    <button onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/track_add.php"'>Pour rajouter des musiques</button>
    <button onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/playlist_list.php"'>Pour voir toutes les playlists</button>
    <button onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/user_list.php"'>Pour voir tous les utilisateurs</button>

 
    </header>

    <?php
            //Vérifier si l'utilisateur est un administrateur connecté
            session_start();
            if($_SESSION['admin']==NULL){
                header('Location: index.php');
            }
        ?>

    <h1>Ajouter une musique</h1>

    <form action="track_insert.php" method="post" >

        <label for="titre">Titre :</label>
        <input type="text" name='titre' required><br>
        <label for="fichier">Nom du fichier :</label>
        <input type="file" name='fichier' accept="audio/wav, audio/mpeg, audio/ogg" ><br><br>

        <input type="submit" value="Inserer">
        
    </form>
</body>
</html>