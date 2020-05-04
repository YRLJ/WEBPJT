<!DOCTYPE html>
<html lang="en">

<head>

    <title>Nom - Accueil</title>
    <link rel="stylesheet" href="./styles/styleaccueil.css">



</head>

<body>

    
    <?php if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {
        echo "connecté";
    } else {
        //echo "pas connecté";
        echo "<div class=\"titre\">
        <h1>Bienvenue sur notre plateforme</h1>
        <p>Notre but et notre volonté est de donner l'accés à tous les cours à tous types de personnes.</p>
    </div>
     ";
    }
    ?>


</body>

</html>