<!doctype html>
<html lang="en">

<head>

    <title>Template</title>
</head>

<body>

    <?php
    if (!isset($_SESSION)) {
        session_start();
    }

    include_once './controller/courseController.php';

    $course = getCourseById($_GET['id']);





    echo  "<h1 class=\"text-center\">" .$course[0]['subject'].": ". $course[0]['title'] . " </h1>
    <div class=\"container\">

        <div class=\"container course text-center\">
            <br>
            <br>";
    if ($course[0]['url'] != null) {
        $split = explode(".",$course[0]['url']);
        
        $ext = end($split);
        if ($ext == "pdf") {
            echo "<iframe class=\" rounded \" width=\"60%\" height=\"900px\" src=\"" . $course[0]['url'] . "\"></iframe>";
        }
        if ($ext == "mp4" || $ext == "mov" || $ext == "avi") {
            echo "<video src=\"" . $course[0]['url'] . "\"></video>";
        }
        if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") {
            echo "<img src=\"" . $course[0]['url'] . "\">";
        }
    }
    

    echo "</div>
    <br>
    <br>
    <div class=\"container rounded text-justify content\">
        <p>".$course[0]['content']."   </p>

    </div>";
    ?>
    <br>
    <br>
    <div class="container buttons text-center">
        <a href="#" class="btn btn-purple">Previous</a>
        <a href="#" class="btn btn-purple">Quiz</a>
        <a href="#" class="btn btn-purple">Next</a>
    </div>
</div>


</body>

</html>