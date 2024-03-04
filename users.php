<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="listUser.php" method="POST">
       <label for="id_User">Identifiant de l'utilisateur</label>
       <input type="text" id="id_User" name="id_User"
       required  minlength="4" maxlength="20" size="21"/><br><br> 

       <!--required oblige a ecrire une donnée-->
       <label for="mail_User">Identifiant de l'utilisateur</label>
       <input type="text" id="mail_User" name="mail_User"
       required  minlength="4" maxlength="20" size="21"/><br><br> 
</textarea>

 <div>
    <button type="submit">Envoyer</button>
            
  </div>

        </form>
        <?php

        ?>
    </body>
</html>
