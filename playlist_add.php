<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ajout d'une playlist</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
    <header>

    <button class="btn"onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/index.php"'>Connexion</button>
    <button class="btn"onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/login.php"'>Accueil</button>
    <button class="btn"onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/track_list.php"'>Pour voir tous les musiques</button>
    <button class="btn"onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/track_add.php"'>Pour rajouter des musiques</button>
    <button class="btn"onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/playlist_list.php"'>Pour voir toutes les playlists</button>
    <button class="btn"onclick='window.location.href="https://falbala.futaie.org:8443/~metallica/RadioFutaie/user_list.php"'>Pour voir tous les utilisateurs</button>

 
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
        


            <input type='submit' value='Générer'>
            
            </form>
     </body>
 </html>