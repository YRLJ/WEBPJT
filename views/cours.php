<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nom - Cours</title>
    <link rel="stylesheet" href="./styles/stylecours.css">
</head>





<body>
    <br><br><br>

    <?php
    if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {
        echo "<a href=\"index.php?page=proposercours\" class=\"logbtn\">Proposer un cours</a>";
    } else {
        echo "<a href=\"index.php?page=login\" class=\"logbtn\">Proposer un cours</a>";
    }
    ?>
    <br><br><br>

    <h1>Tous nos cours</h1>


    <?php

    include_once './controller/courseController.php';
    $courses = getAllCourses();

    if ($courses != null) {
        echo "<div class=\"allcourses\">";
        foreach ($courses as $course) {
            if ($course['valide'] == 'oui') {
                echo "<a href=\"index.php?page=coursdisplay&id=".$course['courseid']."\">
                <div class=\"course\">
                    <h3>".$course['title']."</h3>
                    <p>".$course['subject']."</p>
                    <a class=\"add\" href=\"index.php?page=addcourseaccount&id=".$course['courseid']."\" title=\"Ajouter à mes cours\">Ajouter</a>
                </div>
            </a>";
            }
        }
        echo "</div>";
    } else {
        echo "désole vous n'avez pas de cours dans votre BDD";
    }

    ?>


</body>

</html>