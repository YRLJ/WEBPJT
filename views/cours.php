<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoEd - Tous les cours</title>
    <link rel="stylesheet" href="./styles/stylecours.css">
</head>





<body>
    <div class="tous">
        <br><br><br>

        <!-- Balise PHP qui affiche différents boutons : V1 quand l'utilisateur il lui propose d'ajouter un cours / V2 quand l'utilisateur n'est pas connecté il lui demande de se connecter-->
        <?php
        if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {
            echo "<a href=\"index.php?page=proposercours\" class=\"logbtn\">Proposer un cours</a>";
        } else {
            echo "<a href=\"index.php?page=login\" class=\"logbtn\">Proposer un cours</a>";
        }
        ?>
        <br><br><br>

        <h1>Tous nos cours</h1><!-- Titre page -->

        <div class="separation"></div><!-- Séparateur titre/page-->



        <?php

        include_once './controller/courseController.php';
        $courses = getAllCourses();     //on recupère tous les cours présent dans la BDD

        if ($courses != null) {     //si il y a des cours
            echo "<div class=\"allcourses\">";
            foreach ($courses as $course) {     //on parcours chaque cours avec un forearch
                if ($course['valide'] == 'oui') {       //si un cours est validé alors on l'affiche
                    echo "<a href=\"index.php?page=coursdisplay&id=" . $course['courseid'] . "\">
                <div class=\"course\">
                    <h3>" . $course['title'] . "</h3>
                    <p>" . $course['subject'] . "</p>
                    <a class=\"add\" href=\"index.php?page=addcourseaccount&id=" . $course['courseid'] . "\" title=\"Ajouter à mes cours\">Ajouter</a>
                </div>
            </a>"; //on donne la possibilité aux utilisateurs d'ajouter le cours aux cours qu'ils suivent (on vérifie qu'ils soient connectés dans index.php)
                }
            }
            echo "</div>";
        } else {
            echo "désole vous n'avez pas de cours dans votre BDD";
        }

        ?>

    </div>
</body>

</html>