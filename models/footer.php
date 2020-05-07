<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <footer>



<div class="row">
    <div class="col-sm-6 col-lg-3">
        <ul>
            <li id="first">Cours</li>
            <li><a href="index.php?page=cours">Tous les cours</a></li>
        </ul>
    </div>
    <div class="col-sm-6 col-lg-3">
        <ul>
            <li id="first">Compte</li>
            <?php if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {
                        echo "<li><a href=\"index.php?page=proposercours\">Proposer un cours</a></li>";
                        echo "<li><a href=\"index.php?page=login\">Mes informations</a></li>";
                        echo "<li><a href=\"index.php?page=logout\">Se déconnecter</a></li>";

                    } else {
                        echo "<li><a href=\"index.php?page=login\">Se connecter</a></li>";
                    } ?>
        </ul>
    </div>
    <div class="col-sm-6 col-lg-3">
        <ul>
            <li id="first">Informations</li>
            <li><a href="index.php?page=informations">À propos</a></li>
            <li><a href="index.php?page=informations">Contact</a></li>
        </ul>
    </div>
    <div class="col-sm-6 col-lg-3">
        <ul>
            <li id="first">Suivez-nous</li>
            <li><a href="https://www.jeremydain.live" target = "_blank"><img src="./images/logo/logo_facebook_purple.svg">Facebook</a></li>
            <li><a href="https://www.instagram.com/fatmax_creations/" target = "_blank"><img src="./images/logo/logo_instagram_purple.svg">Instagram</a></li>
            <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target = "_blank"><img src="./images/logo/logo_twitter_purple.svg">Twitter</a></li>
        </ul>
    </div>
</div>






</footer>
    </body>
</html>

