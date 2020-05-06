<?php
$target_dir = "../uploads/";
include_once "../models/Bdd.php";
if(isset($_POST)){
    $bdd = new Bdd();
    $title = $_POST['title'];
    $content = $_POST['content'];
    $subject = $_POST['subject'];
    $target_file = $target_dir . basename($_FILES["imgurl"]["name"]);
    $imgurl = $_FILES['imgurl']['name'];
    move_uploaded_file($_FILES["imgurl"]["tmp_name"], $target_file);
    $imgurl = "./uploads/".$imgurl;
    $bdd->createCourse($imgurl,$title,$content,$subject);
    $course = $bdd->getCourseByTitle($title);
    $link = "location: index.php?page=createquiz&id=".$course['courseid'];
    header($link);
    
}
  


?>