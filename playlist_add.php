<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ajout d'une playlist</title>
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

        <h1>Ajout d'une playlist</h1>


        <form action="playlist_insert.php" method="post">

            <label for='titre'>Titre : </label>
            <input type='text' id='titre' name='titre' minlength="1" maxlength="255" size='50' required><br><br> 
        
            <label for='date'>Date & Heure : </label>
            <input type="datetime-local" id="datetime" name="datetime" required><br><br> 

            <input type='submit' value='Générer'>
            
            </form>
     </body>
 </html>