<!doctype html>
<html>
<head>
    <title>ajout</title>
</head>
<body>

    <h1>ajout user</h1>

    <form action="ajout_music_veref.php" method="post" >

        <label for="titre">Titre :</label>
        <input type="text" name='titre' required><br>
        <label for="fichier">Nom du fichier :</label>
        <input type="file" name='fichier' accept="audio/flac, audio/mpeg, audio/ogg" ><br><br>

        <input type="submit" value="Rechercher">
        
    </form>
    
    <em>&copy; 2024</em>
</body>
</html>