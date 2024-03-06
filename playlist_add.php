<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ajout d'une playlist</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>

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