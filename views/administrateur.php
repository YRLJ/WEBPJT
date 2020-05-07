<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoEd - Dashboard administrateur</title>
    <link rel="stylesheet" href="./styles/styleadministrateur.css">

</head>

<body>
    <div class="tous">
        <h1>Dashboard administrateur</h1>

        <div class="separation"></div><!-- Séparateur titre/page-->

        <p class="decallage">Bienvenue sur le dashboard, sur ce dernier vous pouvez accepter ou refuser un cours créé par un membre de la communauté CoEd. Merci pour votre dévouement et pour le temps que vous passez à vérifier ces cours. L'équipe CoEd vous remercie.</p>



        <div class="courseswaiting">
            <h3>Les cours en attente de validation</h3>

            <?php
            // Dans cette balise on affiche tous les cours qui ont été proposé par des utilisateurs du site et on propose aux administrateurs de les supprimer ou de les valider
            include_once './controller/courseController.php';
            $courses = getAllCourses();     //on récupère tous les cours présent dans la BDD

            if ($courses != null) {     //si il y a des cours
                $nbrcourses = 0;
                echo "<div class=\"coursnotvalide\">";
                foreach ($courses as $course) {         //on fait un forearch pour regarder tous les cours
                    if ($course['valide'] == 'non') {       //si le cours n'est pas valide on l'affiche
                        $nbrcourses++;
                        echo "<div class=\"cours\">
                <h4>" . $course['title'] . "</h4>
                <p>" . $course['subject'] . "</p>
                <p>" . $course['content'] . "</p>
                <a href=\"index.php?page=deletecourse&id=" . $course['courseid'] . "\">Supprimer le cours</a>
                <a href=\"index.php?page=validecourse&id=" . $course['courseid'] . "\">Valider le cours</a>
            </div>"; //on met deux boutons (1 bouton de validation et 1 bouton de suppresion) pour gérer les cours
                    }
                }
                echo "</div>";
                if ($nbrcourses == 0) {         //si aucun est en attente de validation on l'écrit
                    echo "<p class=\"decallage\">Aucun cours en attente de validation. Revenez plus tard. Merci.</a>";
                }
            } else {
                echo "<p class=\"decallage\">Aucun cours en attente de validation. Revenez plus tard. Merci.</a>";
            }

            ?>
        </div>
    </div>
</body>

</html>