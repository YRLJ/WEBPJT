<?php


include_once './models/Bdd.php';


function getAllCourses(){
    $Bdd = new Bdd();
    $courses = $Bdd->getCourses();
    return $courses;
}

function getCourseById($id){
    $Bdd = new Bdd();
    $courses = $Bdd->getCourseById($id);
    return $courses;
}


