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
    $courses = getAllCourses();     //on récupère tous les cours présent dans la BDD

    if ($courses != null) {     //si il y a des cours
        $nbrcourses=0;
        echo "<div class=\"coursnotvalide\">";
        foreach ($courses as $course) {         //on fait un forearch pour regarder tous les cours
            if ($course['valide'] == 'non') {       //si le cours n'est pas valide on l'affiche
                $nbrcourses++;
                echo "<div class=\"cours\">
                <h4>" . $course['title'] . "</h4>
                <p>" . $course['subject'] . "</p>
                <p>" . $course['content'] . "</p>
                <a href=\"index.php?page=deletecourse&id=" . $course['courseid'] . "\">Supprimer le cours</a>       //bouton qui permet de supprimer le cours
                <a href=\"index.php?page=validecourse&id=" . $course['courseid'] . "\">Valider le cours</a>         //bouton qui permet de valider le cours
            </div>";
            }
        }
        echo "</div>";
        if($nbrcourses==0){         //si aucun est en attente de validation on l'écrit
            echo "Aucun cours en attente de validation.";
        }
    } else {
        echo "Aucun cours est en attente de validation.";
    }

    ?>
</body>

</html>