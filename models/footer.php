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
            <li><a href="">Mathématiques</a></li>
            <li><a href="">Français</a></li>
            <li><a href="">Espagnol</a></li>
            <li><a href="">Allemand</a></li>
            <li><a href="">Anglais</a></li>
            <li><a href="">Physique, Chimie</a></li>
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
            <li id="first">Contact</li>
            <li><a href="">Idée ?</a></li>
        </ul>
    </div>
    <div class="col-sm-6 col-lg-3">
        <ul>
            <li id="first">Suivez-nous</li>
            <li><a href=""><img src="images/logo_facebook_purple.svg">Facebook</a></li>
            <li><a href=""><img src="images/logo_instagram_purple.svg">Instagram</a></li>
            <li><a href=""><img src="images/logo_twitter_purple.svg">Twitter</a></li>
        </ul>
    </div>
</div>






</footer>
    </body>
</html>

