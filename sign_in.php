<!doctype html>
<html lang=fr>
<head>
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>

    <form action="login.php" method="POST">
        <label for="idlogin">Login : </label>
        <input type="text" id="idlogin" name="login"><br>
        <label for="password">Mot de passe : </label>
        <input type="password" id="idpassword" name="password">
        <input type="submit">
    </form>

    <?php
        session_start();
    ?>
</body>