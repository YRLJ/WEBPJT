<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard administrateur</title>
    <link rel="stylesheet" href="./styles/styleadministrateur.css">

</head>

<body>
    <h1>Bienvenue sur le dashboard administrateur</h1>
    <p>Sur ce dashboard vous pouvez valider un cours</p>

    <h3>Les cours en attente de validation</h3>

    <?php

    include_once './controller/courseController.php';
    $courses = getAllCourses();

    if ($courses != null) {
        echo "<div class=\"coursnotvalide\">";
        foreach ($courses as $course) {
            if ($course['valide'] == 'non') {
                echo "<div class=\"cours\">
                <h4>" . $course['title'] . "</h4>
                <p>" . $course['subject'] . "</p>
                <p>" . $course['content'] . "</p>
                <a href=\"index.php?page=deletecourse&id=" . $course['courseid'] . "\">Supprimer le cours</a>
                <a href=\"index.php?page=validecourse&id=" . $course['courseid'] . "\">Valider le cours</a>
            </div>";
            }
        }
        echo "</div>";
    } else {
        echo "désole vous n'avez pas de cours dans votre BDD";
    }

    ?>
<!--
    <div class="coursnotvalide">
        <div class="cours">
            <h4>Titre du cours</h4>
            <p>Sujet du cours</p>
            <p>Texte du cours</p>
            <a href="index.php?page=deletecourse&id=">Supprimer le cours</a>
            <a href="index.php?page=validecourse&id=">Valider le cours</a>
        </div>
    </div>
-->
</body>

</html>