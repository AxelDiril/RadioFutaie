<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="listUser.php" method="POST">
       <label for="libCourt">libelle court</label>

<input type="text" id="libCourt" name="libCourt"
       required  minlength="4" maxlength="20" size="21"/><br><br> 
<!--required oblige a ecrire une donnée-->
<label for="libLong">libelle long</label>

<textarea id="libLong" placeholder="test" name="libLong" rows="6" cols="30">

</textarea>

 <div>
    <button type="submit">Envoyer</button>
            
  </div>

        </form>
        <?php

        ?>
    </body>
</html>
