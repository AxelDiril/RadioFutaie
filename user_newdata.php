<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Mise à jour d'un utilisateur</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <form action="user_update.php" method="POST"> 

       <!--required oblige a ecrire une donnée-->
 
    <label for="lastname_user">Sélectionnez la personne à modifier :</label>
        <select name="lastname_user" id="lastname_user">
        <option value=""> Choisissez la personne à modifier</option>
       <?php
       require 'connect.php';
       
       
       
            $db = new PDO(DNS, LOGIN, PASSWORD, $options);
            $sql = 'SELECT lastname_user from RF_USER';
            $statement = $db->prepare($sql);
            $statement->execute();
            foreach ($statement as $row) {
                echo '<option value="'.$row['lastname_user'].'">'.$row['lastname_user'].'</option>';
            }

        ?> 
        </select>

  </select>
</form>
       <label for="email_user">E-mail de l'utilisateur</label>
       <input type="email" id="email_user" name="email_user"
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
    
       <label for="password_user">Mot de passe de l'utilisateur</label>
       <input type="password" id="password_user" name="password_user"
       required  minlength="4" maxlength="20" size="21"/><br><br>
    
       <label for="phone_user">Téléphone de l'utilisateur</label>
       <input type="text" id="phone_user" name="phone_user"
       required  minlength="4" maxlength="20" size="21"/><br><br>

        <input type="submit" value="Valider">

    </form>
    </body>
</html>