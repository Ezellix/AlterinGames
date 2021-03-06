<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lib/normalize.css">
    <link rel="stylesheet" href="css/mes_css/layout-main.css">
    <link rel="stylesheet" href="css/mes_css/layout-secondary.css">
    <link rel="stylesheet" href="css/mes_css/layout-footer.css">
    <link rel="stylesheet" href="css/mes_css/menu.css">
    <link rel="icon" href="/img/logo_menu.png">

    <title>Paramètres | AlterinGames</title>
</head>

<body class="settings">
<header>
    <img src="img/image_settings.png" alt="" class="img_head">
    <img src="img/logo.webp" alt="Logo AlterinGames: Alter the rules" class="logo claire">
    <h1>Paramètres</h1>

    <!--MENU-->
    <div class="nav-toggle" onclick='document.documentElement.classList.toggle("menu-open")'>
        <div class="nav-toggle-bar"></div>
    </div>
    <nav class="menu">
        <ul>
            <li class="menu-lien-principal"><a href="index.html">Accueil</a></li>
            <li class="menu-lien-principal"><a href="board-games.html">Jeux de société</a></li>
            <li class="menu-lien-principal"><a href="card-games.html">Jeux de cartes</a></li>
            <li class="menu-lien-principal"><a href="tools.html">Outils</a></li>
            <li class="menu-lien-secondaire"><a href="profile.php">Profil</a></li>
            <li class="menu-lien-secondaire"><a href="">Paramètres</a></li>
        </ul>
        <h1>devenez les maîtres du jeu</h1>
        <img src="img/logo_menu.png" alt="Logo AlterinGames: Alter the rules" class="claire">
    </nav>
</header>

<main>
    <div>
        <div class="settings-option">Mode nuit</div>
        <div class="settings-option"><a href="modify-profile.php">Modifiez votre profil</a></div>
        <div class="settings-option">Inscription à la newsletter</div>
        <div class="settings-option"><a href="why-premium.html">Passer à Premium</a></div>
        <div class="settings-option"><a href="contact.php#contact">Nous contacter</a></div>
        <?php
        session_start();
        if (isset($_SESSION['login'])) {
            echo "<div class='settings-option' id='deconnexion'><a href='backend/AlterinGames_backend/logout.php'>Déconnexion</a></div>";
        }
        ?>
    </div>
</main>

<footer>
    <div class="mentions">
        <p>Ce site a été créé par Charles Mangin, Julien Ferré, et Floran Marchal, étudiants au DUT MMI de Montbéliard</p>
        <p>Ce projet a été réalisé dans le cadre d’un exercice pédagogique au département MMI de Montbéliard</p>
        <p>Tous droits de reproduction et de diffusion réservés © 2021</p>
    </div>
    <div class="footer_links">
        <a href="settings.php">Paramètres</a>
        <a href="contact.php#contact">Nous contacter</a>
        <a href="contact.php#projets">Découvrez nos autres projets</a>
    </div>
</footer>
</body>
</html>