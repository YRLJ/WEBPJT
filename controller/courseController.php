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

function getUrlQuizWithIdCourse($courseid){     //fonction qui récupère l'url du quiz d'un cours
    $Bdd = new Bdd();
    $result=$Bdd->getUrlQuizWithIdCourse($courseid);
    $urlQuiz=$result['url'];
    return $urlQuiz;
}

function addCourseToAccount($courseid){         //fonction qui ajoute un cours a la liste des cours suivit par un compte
    $Bdd = new Bdd();
    $idcourses = $Bdd->getAccountIdCourses($_SESSION['username']);      //on récupère tous les id des cours que suit déjà un compte
    $possede=false;     //variable qui nous permettra de savoir si il le possède déjà
    foreach($idcourses as $idcourse){       //pour chaque cours que possède un compte, on regarde si le cours qui doit être ajouté est déjà possédé
        if($idcourse['courseid'] == $courseid){
            $possede=true;      //si il est possédé alors true
        }
    }
    if($possede == false){      //si il n'est pas possédé 
        $Bdd->addCourseToAccount($courseid, $_SESSION['username']);     //alors on le rajoute dans la BDD
        $_SESSION['message']=  'Le cours vient d\'être ajouté';     //on met le message dans session pour pouvoir l'afficher en JS a l'utilisateur
    }else{
        $_SESSION['message']= 'Le cours a déjà été ajouté';       //l'utilisateur possède déjà le cours donc on lui dit le message avec une popup JS
    }
}
