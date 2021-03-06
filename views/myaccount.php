<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoEd - Mon compte</title>
    <link rel="stylesheet" href="./styles/stylemyaccount.css"><!-- On fait un lien avec le CSS de cette page -->

</head>

<body>
    <div class="tous"><!-- Div qui permet d'avoir le footer en bas de page meme lorsque la page n'est pas rempli -->
        <h1>Mon compte</h1><!-- Titre de la page-->

        <div class="separation"></div><!-- Séparateur titre/page-->

        <div class="myinfo">
            <h2>Mes informations</h2><!-- Première partie de la page : les informations du compte -->
            <p>Bienvenue, <?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?>. Vous êtes actuellement sur la page mon compte dont voici vos identifiants : <?php echo $_SESSION['username'] ?></p><!-- Balise PHP qui écrit les informations du compte-->

            <!-- Si le compte est un compte administrateur alors on lui permet d'accéder au dashboard admin -->
            <?php
            if ($_SESSION['type'] == 'admin') {
                echo "Vous faîtes partie de notre équipe d'administrateur, vous pouvez alors accéder à <a href=\"index.php?page=administrateur\">notre page administrateur</a> où vous pouvez valider ou non les cours qui sont proposés.";
            }
            ?>
        </div>

        <div class="mycourses">
            <h2>Les cours que je suis</h2><!-- Deuxième partie de la page : les cours que suit le compte actuel -->

            <?php
            include_once './controller/courseController.php';
            $idcourses = getAllIdAccountCourses(); //on récupère tous les cours que suit un compte
            echo "<div class=\"allcourses\">";
            foreach ($idcourses as $idcourse) {
                $course = getCourseById($idcourse['courseid']); //on récupère le cours grâce à l'ID
                if ($course['valide'] == "oui") {
                    echo "<a href=\"index.php?page=coursdisplay&id=" . $course['courseid'] . "\">
                <div class=\"course\">
                    <h3>" . $course['title'] . "</h3>
                    <p>" . $course['subject'] . "</p>";
                    if ($idcourse['score'] == null) {
                        echo "<p>Vous n'avez pas encore fait ce cours</p>";
                    } else {
                        echo "<p>Score : " . $idcourse['score'] . "/100</p>";
                    }
                    echo "</div>
            </a>";
                }
            }
            echo "</div>";

            ?>
        </div>
    </div>
</body>

</html>