<?php
 
    if(isset($_FILES['chanson'])){ // obliger de demander si la variable existe sinon ne marche pas
     // $_FILES contient les informations sur les fichiers
      $dossier = 'musique/';
      $fichier = basename($_FILES['chanson']['name']);// prend le chemin complet pour en extraire juste le nom du fichier sans extension, enleve les " / , \ , . , etc..."
      $taille_maxi = 100000000000; // taille (en octets) 
      $taille = filesize($_FILES['chanson']['tmp_name']); // Lit la taille du fichier donné.
      $extensions = array('mp3','mp4'); // différents format de musique que l'utilisateur peut upload
      $extension = strtolower(substr(strrchr($_FILES['chanson']['name'], '.') ,1));
      // strrchr renvoie l'extension avec le point " ."
      // substr($_FILES['chanson']['name'],1) ignore le premier caractère de chaine
      // strtolower met l'extension en minuscules
     
      // CONDITIONS DE SECURITEES //
        if(in_array($extension, $extensions)){ //Si l'extension est dans le tableau
             
            if($taille<$taille_maxi){// si la taille correspond
                 
                //On formate le nom du fichier ici: cela permet de remplacer les lettres accentué par des non accentué et on récupere le résultat dans le fichier
                $fichier = strtr($fichier,'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                //On formate le nom du fichier ici: cela permet de remplacer les caracteres spéciaux (sauf lettre d'avant) par des "_"
                $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
                 
                if(move_uploaded_file($_FILES['chanson']['tmp_name'],"/musique")) { // TRUE, c'est que ça a fonctionné...
                     
                    $msg = 'Téléchargement effectué avec succès !';
                }
                else{ //Sinon FALSE.
                     
                    $msg = 'Echec du téléchargement !';
                }
            }
            else{
                 
                $erreur = 'Le fichier est trop gros !';
            }
        }
        else{
             
            $erreur = 'Vous devez télécharger un fichier de type mp3 !';
        }  
    }
?>
     
<html>
    <head>
        <meta http-equiv="Content-Type" charset="utf-8" />
    </head>
         
        <body>
            <div id="form-telechargement">
                 
                <form method="POST" action="upload.php" enctype="multipart/form-data">
                <!-- POST permet de garder des information ou ficher en binéaire dans la variable-->
                <!-- encodage du fichier  et action = nom du site ou renvoyer le formulaire -->  
                    <input type="hidden" name="MAX_FILE_SIZE" value="100000"> <!-- On limite le fichier à 100Ko -->
                    <label>Fichier :</label><input type="file" name="chanson"> <!-- permet à l'utilisateur d'aller chercher sur son disque dur -->
                    <input type="submit" name="envoyer" value="Envoyer le fichier">
                </form>
                 
                <?php
                if(isset($erreur)){ //S'il y a une erreur, on n'upload pas et on affiche l'erreur
                     
                     echo $erreur;
                }
                 
                if(isset($msg)){
                     
                    echo $msg;
                }
                ?>
                 
            </div>
        </body>
</html>