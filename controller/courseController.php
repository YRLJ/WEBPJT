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


function getAllIdAccountCourses(){
    $Bdd = new Bdd();
    $idcourses = $Bdd->getAccountIdCourses($_SESSION['username']);
    return $idcourses;
}

function getCourseWithId($idcourse){
    $Bdd = new Bdd();
    $course = $Bdd->getCourseWithId($idcourse);
    return $course;
}