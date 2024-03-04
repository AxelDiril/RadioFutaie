<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <form action="playlist_list.php" method="post">
            
            <label for="id_play">Identifiant de la playlist : </label>
            <input type="text" id="id_play" name="id_play" required><br><br>

            <label for='titre'>Titre : </label>
            <input type='text' id='titre' name='titre' minlength="1" maxlength="255" size='50' required><br><br> 
        
            <label for='date'>Date & Heure : </label>
            <input type="datetime-local" id="datetime" name="datetime" required><br><br> 
    

            <input type='submit' value='valider'><br><br> 
            
            </form>
     </body>
 </html>