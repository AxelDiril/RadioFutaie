<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="user_list.php" method="POST">
       <label for="id_User">Identifiant de l'utilisateur</label>
       <input type="text" id="id_User" name="id_User"
       required  minlength="3" maxlength="20" size="21"/><br><br> 

       <!--required oblige a ecrire une donnée-->
       <label for="mail_User">E-mail de l'utilisateur</label>
       <input type="text" id="mail_User" name="mail_User"
       required  minlength="3" maxlength="20" size="21"/><br><br>
       
       <label for="nickname_User">surnom de l'utilisateur</label>
       <input type="text" id="nickname_User" name="nickname_User"
       required  minlength="3" maxlength="20" size="21"/><br><br>

       <label for="firstname_User">Prénom de l'utilisateur</label>
       <input type="text" id="firstname_User" name="firstname_User"
       required  minlength="3" maxlength="20" size="21"/><br><br>

       <label for="lastname_User">nom de l'utilisateur</label>
       <input type="text" id="lastname_User" name="lastname_User"
       required  minlength="4" maxlength="20" size="21"/><br><br>
    
       <label for="password_User">mot de passe de l'utilisateur</label>
       <input type="text" id="password_User" name="password_User"
       required  minlength="4" maxlength="20" size="21"/><br><br>
    
       <label for="phone_User">téléphone de l'utilisateur</label>
       <input type="text" id="phone_User" name="phone_User"
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
