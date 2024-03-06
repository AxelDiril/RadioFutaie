<!doctype html>
<html>
<head>
    <title>Ajout d'une musique</title>
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
    
    <h2>Ajouter une musique</h2>

    <form action="track_insert.php" method="post" >

        <label for="titre">Titre :</label>
        <input type="text" name='titre' required><br>
        <label for="fichier">Nom du fichier :</label>
        <input type="file" name='fichier' accept="audio/wav, audio/mpeg, audio/ogg" ><br><br>

        <input type="submit" value="Inserer">
        
    </form>
</body>
</html>