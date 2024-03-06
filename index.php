<!doctype html>
<html lang=fr>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<header>
        <img src="images/logo.png" alt="Logo de RadioFutaie">
        <nav>
                <a href="contact.php" class="btn">Nous contacter</a>
                
        </nav>
    </header>

    <h1>Connexion</h1>

    <form action="login.php" method="POST">
        <label for="idlogin">Login : </label>
        <input type="text" id="idlogin" name="login"><br>
        <label for="password">Mot de passe : </label>
        <input type="password" id="idpassword" name="password">
        <input type="submit">
    </form>

    <a href='user_add.php'>S'inscrire</a>


<footer>
    <p>&copy; 2024 RadioFutaie </p>
      <p>Tous droits sont réservés</p>
    
<footer>
</body> 
</html>