<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
    <link rel="stylesheet" href="./styles/stylemyaccount.css">

</head>
<body>
    <h1>Mon compte</h1>

    <h2>Mes informations</h2>
    <p>Bienvenue, <?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?>. Vous êtes actuellement sur la page mon compte dont voici vos identifiants : <?php echo $_SESSION['username'] ?></p>
    
    <?php 
    if($_SESSION['type'] == 'admin'){
        echo "Vous faîtes partie de notre équipe d'administrateur, vous pouvez alors accéder à <a href=\"index.php?page=administrateur\">notre page administrateur</a> où vous pouvez valider ou non les cours qui sont proposés.";
    }
    ?>
    
    <h2>Les cours que je suis</h2>

<?php
    include_once './controller/courseController.php';
    $idcourses=getAllIdAccountCourses();
    echo "<div class=\"touslescours\">";
    foreach($idcourses as $idcourse){
        $course=getCourseById($idcourse['courseid']);
        echo "<a href=\"\">
        <div class=\"cours row\">
            <div class=\"col-8\" id=\"titre\">
                <h3>" . $course['title'] . "</h3>
            </div>
            <div class=\"col-4\" id=\"note\">
                <p>Appréciations des élèves (note sur 10 ou étoiles sur 5)</p>
            </div>
            <div class=\"col-4\" id=\"duree\">
                <p>Durée approximative</p>
            </div>
            <div class=\"col-8\" id=\"resume\">
                <p>" . $course['subject'] . "</p>
            </div>
        </div>
    </a>";
    }
    echo "</div>";

    ?>
</body>
</html>