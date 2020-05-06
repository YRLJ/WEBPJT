<!doctype html>
<html lang="en">

<head>

    <title>Cours</title>
    <link rel="stylesheet" href="./styles/styledisplaycourse.css">
</head>

<body>

    <?php
    if (!isset($_SESSION)) {
        session_start();
    }

    include_once './controller/courseController.php';

    $course = getCourseById($_GET['id']);
    $UrlQuiz = getUrlQuizWithIdCourse($course['courseid']);
    




    echo  "<h1 class=\"text-center title\">" .$course['subject'].": ". $course['title'] . " </h1>
    <div class=\"container\">

        <div class=\"container course text-center\">
            <br>
            <br>";
    if ($course['url'] != null) {
        $split = explode(".",$course['url']);
        
        $ext = end($split);
        if ($ext == "pdf") {
            echo "<iframe class=\" rounded \" width=\"60%\" height=\"900px\" src=\"" . $course['url'] . "\"></iframe>";
        }
        if ($ext == "mp4" || $ext == "mov" || $ext == "avi") {
            echo "<video width=\"600\" height=\"auto\" controls>
            <source src=\"" . $course['url'] . "\">
            </video>";
        }
        if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") {
            echo "<img width=\"600\" height=\"auto\" src=\"" . $course['url'] . "\">";
        }
    }
    

    echo "</div>
    <br>
    <br>
    <div class=\"container rounded text-justify content\">
        <div class=\"\">
        <h2 class=\"title\">Contenu:</h2>
        <p>".$course['content']."   </p>
        </div>

    </div>
    <br>
    <br>
    <div class=\"container buttons text-center\">
        
        <a href=\"index.php?page=quiz&id=".$course['courseid']."&url=".$UrlQuiz."\" class=\"btn btn-purple\">Quiz</a>
        
    </div>";
    ?>
    
</div>


</body>

</html>