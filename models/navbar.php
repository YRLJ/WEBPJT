<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://kit.fontawesome.com/4dded3e0b7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
        <nav class="navbar">
            <a href="index.php" class="brand-title"><img height="35" witdh="11.7" src="./images/logo/logo.svg"></a><!-- On met le logo a gauche -->
            <div class="navbar-links">
                <ul>
                    <li><a href="index.php?page=cours" title="Cours"><i class="fas fa-book-open fa-2x"></i></a></li>        <!-- On met un bouton pour accéder à tous les cours -->
                    <!-- On met une balise PHP qui affiche un bouton de connexion lorsque l'utilisateur n'est pas connecté et deux boutons lorsqu'il est connecté (Bouton déconnexion et bouton mon compte) -->
                    <?php if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {
                        echo "<li><a href=\"index.php?page=logout\" title=\"Se déconnecter\"><i class=\"fas fa-sign-out-alt fa-2x\"></i></a></li>";
                        echo "<li><a href=\"index.php?page=login\" title=\"Mon compte\"><i class=\"fas fa-user fa-2x\"></i></a></li>";
                    } else {
                        echo "<li><a href=\"index.php?page=login\" title=\"Se connecter\"><i class=\"fas fa-user fa-2x\"></i></a></li>";
                    } ?>
                </ul>
            </div>
        </nav>
</body>

</html>