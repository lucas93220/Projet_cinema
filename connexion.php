<?php
    session_start();
    include_once("./src/connect_bdd.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/connexion.css">
    <title>Connexion</title>
</head>
<body>
    <header>
        <a href="./index.html"><img class="logo" src="./asset/logo.png" alt="logo"></a>
        <nav>
            <ul class="navigation">
                <li><a href="./index.html">ACCUEIL</a></li>
                <li><a href="./films.html">NOS FILMS</a></li>
                <li><a href="./connexion.html">CONNEXION</a></li>
                <li><a href="./inscription.html">CRÉER UN COMPTE</a></li>
            </ul>
            <input type="checkbox" class="ChangeTheme" > 

        </nav>
    </header>
    <main>
            <h2>Connectez-vous</h2>        
            <form class="connexion" action="" method="post">
            <label for="email">Email:</label> <br>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Mot de passe:</label> <br>
            <input type="password" id="password" name="password" required> <br>
            <p class="pswForget"><a href=".">Mot de passe oublie ?</a></p>
            <br>
            <button  class="button" type="submit">Connexion</button>
        </form>
        <?php
            //inclusion
            include_once "./src/log.inc.php";
            ?>
        <p>Vous n'avez pas de compte? <a href="./inscription.html">Inscrivez-vous ici</a></p>
        
    </main>

    <footer>
        <p>
            Lucas Lopez - 2024
        </p>
    </footer>
    <script src="./js/light.js"></script>
</body>
</html>