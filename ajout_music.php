<!doctype html>
<html>
<head>
    <title>ajout</title>
</head>
<body>
    <form action="ajoutSoiree.php" method="post" >

        <label for="titre">Titre :</label>
        <input type="text" name='titre' required><br>
        <label for="fichier">Nom du fichier :</label>
        <input type="file" name='fichier' required><br>
        <label for="path">pathname :</label>
        <input type="text" name='path'  required><br>

        <input type="submit" value="Rechercher">
        
    </form>
    
    <em>&copy; 2024</em>
</body>
</html>