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
    <link rel="stylesheet" href="./css/inscription.css">
    <title>Inscription</title>
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
        <section class="banniereForm">
            <img class="banniere" src="./asset/banniere.png" alt="banniere">
        </section>
        <h2>Inscrivez-vous !</h2>
        <form class="inscription" method="post">
            <label for="nom">Nom:</label> <br>
            <input type="text" id="nom" name="nom" required> <br>

            <label for="prenom">Prénom:</label> <br>
            <input type="text" id="prenom" name="prenom" required> <br>

            <label for="email">Email:</label> <br>
            <input type="email" id="email" name="email" required> <br>

            <label for="mdp">Mot de passe:</label> <br>
            <input type="password" id="mdp" name="password" required> <br>

            <label for="mdpConfirm">Confirmer le mot de passe:</label> <br>
            <input type="password" id="mdpConfirm" name="passConfirm" required> <br>

            <label for="tel">Téléphone:</label> <br>
            <input type="tel" id="tel" name="telephone" required> <br>

            <button class="button" type="submit" name="submit">Inscription</button> <br>
        </form>
        <?php
            //inclusion
            include_once "./src/traitement.inc.php";
            ?>
    </main>

    <footer>
        <p>
            Lucas Lopez - 2024
        </p>
    </footer>
    <script src="./js/light.js"></script>
</body>
</html>