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
// Dans cette balise on affiche tous les cours qui ont été proposé par des utilisateurs du site et on propose aux administrateurs de les supprimer ou de les valider
    include_once './controller/courseController.php';
    $courses = getAllCourses();

    if ($courses != null) {
        $nbrcourses=0;
        echo "<div class=\"coursnotvalide\">";
        foreach ($courses as $course) {
            if ($course['valide'] == 'non') {
                $nbrcourses++;
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
        if($nbrcourses==0){
            echo "Aucun cours en attente de validation.";
        }
    } else {
        echo "Aucun cours est en attente de validation.";
    }

    ?>
</body>

</html>