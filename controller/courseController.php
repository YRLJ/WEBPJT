<?php


include_once './models/Bdd.php';


function getAllCourses(){
    $Bdd = new Bdd();
    $courses = $Bdd->getCourses();
    return $courses;
}


