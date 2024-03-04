<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="user_insert.php" method="POST">
       <label for="id_user">Identifiant de l'utilisateur</label>
       <input type="text" id="id_user" name="id_user"
       required  minlength="3" maxlength="20" size="21"/><br><br> 

       <!--required oblige a ecrire une donnée-->
       <label for="mail_user">E-mail de l'utilisateur</label>
       <input type="text" id="mail_user" name="mail_user"
       required  minlength="3" maxlength="20" size="21"/><br><br>
       
       <label for="nickname_user">Surnom de l'utilisateur</label>
       <input type="text" id="nickname_user" name="nickname_user"
       required  minlength="3" maxlength="20" size="21"/><br><br>

       <label for="firstname_user">Nom de l'utilisateur</label>
       <input type="text" id="firstname_user" name="firstname_user"
       required  minlength="3" maxlength="20" size="21"/><br><br>

       <label for="lastname_user">Prénom de l'utilisateur</label>
       <input type="text" id="lastname_user" name="lastname_user"
       required  minlength="4" maxlength="20" size="21"/><br><br>
    
       <label for="password_user">mot de passe de l'utilisateur</label>
       <input type="text" id="password_user" name="password_user"
       required  minlength="4" maxlength="20" size="21"/><br><br>
    
       <label for="phone_user">téléphone de l'utilisateur</label>
       <input type="text" id="phone_user" name="phone_user"
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
