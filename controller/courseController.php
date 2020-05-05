<?php


include_once './models/Bdd.php';        //on appelle la page Bdd.php


function getAllCourses(){           //fonction qui récupère tous les cours en utilisant getCourses de Bdd.php
    $Bdd = new Bdd();
    $courses = $Bdd->getCourses();
    return $courses;        //retourne un tableau à 2 entrées avec tous les cours
}

function getCourseById($id){        //fonction qui récupère le cours dont on a l'id en parametre
    $Bdd = new Bdd();
    $course = $Bdd->getCourseById($id);
    return $course;
}


function getAllIdAccountCourses(){          //fonction qui récupère tous les cours que suit le compte qui a sa session ouverte
    $Bdd = new Bdd();
    $idcourses = $Bdd->getAccountIdCourses($_SESSION['username']);
    return $idcourses;
}

function getCourseWithId($idcourse){            //fonction qui récupère les informations d'un cours avec son id en paramètre
    $Bdd = new Bdd();
    $course = $Bdd->getCourseById($idcourse);
    return $course;
}

function deleteCourse(){            //fonction qui supprime un cours et renvoi l'utilisateur au dashboard administrateur
    $Bdd = new Bdd();
    $Bdd->deleteCourseWithId($_GET['id']);
    header('location: ../WEBPJT/index.php?page=administrateur');

}

function valideCourse(){            //fonction qui valide un cours et renvoi l'utilisateur au dashboard administrateur
    $Bdd = new Bdd();
    $Bdd->valideCourseWithId($_GET['id']);
    header('location: ../WEBPJT/index.php?page=administrateur');

}

function getUrlQuizWithIdCourse($courseid){
    $Bdd = new Bdd();
    $result=$Bdd->getUrlQuizWithIdCourse($courseid);
    $urlQuiz=$result['url'];
    return $urlQuiz;
}
