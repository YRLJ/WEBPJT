<!doctype html>
<html lang="en">

<head>

    <title>Template</title>
</head>

<body>

<?php
if(! isset($_SESSION)){
    session_start();
}

include_once '../controller/courseController.php';

$course = getCourseById($_GET['id']);

 ?>

    <h1 class="text-center"><?php echo $course['title'] ?> </h1>
    <div class="container">

        <div class="container course text-center">
            <br>
            <br>
            <?php if ($course['url'] != null) {
                $split = str_split($course['url'], ".");
                $ext = $split[1];
                if ($ext == "pdf") {
                    echo "<iframe class=\" rounded \" width=\"60%\" height=\"900px\" src=\"". $course['url'] . "\"></iframe>";
                }
                if ($ext == "mp4" || $ext =="mov" || $ext == "avi"){
                    echo "<video src=\"".$course['url']."\"></video>";
                }
                if ($ext == "jpg" || $ext == "jpeg" || $ext == "png"){
                    echo "<img src=\"".$course['url']."\">";
                }
            }
            ?>

        </div>
        <br>
        <br>
        <div class="container rounded text-justify content">
            <p> <?php echo $course['content'] ?> </p>
            
        </div>
        <br>
        <br>
        <div class="container buttons text-center">
            <a href="#" class="btn btn-purple">Previous</a>
            <a href="#" class="btn btn-purple">Quiz</a>
            <a href="#" class="btn btn-purple">Next</a>
        </div>


</body>

</html>