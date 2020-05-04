<?php

session_start();
include_once './models/header.php';
include_once './models/loader.php';
include_once './models/navbar.php';

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'createquiz':
            include_once './views/quizcreator.php';
            break;

        case 'cours':
            include_once "./views/cours.php";
            break;

        case 'coursdisplay':
            include_once "./views/coursedisplay.php";
            break;

        case 'ajouter':
            include_once './views/create_course.php';
            break;

        case 'login':
            if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {
                include_once './views/myaccount.php';
            } else {
                include_once './views/login.php';
            }
            break;

        case 'logout':
            include_once './views/logout.php';
            break;

        case 'signup':
            if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {
                include_once './views/myaccount.php';
            } else {
                include_once './views/signup.php';
            }
            break;

        case 'connexion':
            include_once './controller/accountController.php';
            connexion();
            break;

        case "creatAccount":
            include_once './controller/accountController.php';
            creatAccount();
            break;

        case "proposercours":
            include_once './views/proposer_cours.php';
            break;

        case "administrateur":
            if ($_SESSION['type'] == "admin") {
                include_once './views/administrateur.php';
            }
            break;

        case "deletecourse":
            include_once './controller/courseController.php';
            deleteCourse();
            break;

        case "validecourse":
            include_once './controller/courseController.php';
            valideCourse();
            break;
    }

    /*

    if ($_GET['page'] == 'createquiz') {
        include_once 'views/quizcreator.php';
    }
    if ($_GET['page'] == 'cours') {
        include_once "views/cours.php";
    }
    if ($_GET['page'] == 'coursdisplay') {
        include_once "views/coursedisplay.php";
    }
    if ($_GET['page'] == 'ajouter') {
        include_once 'views/create_course.php';
    }
    if ($_GET['page'] == 'login') {
        if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {
            include_once './views/myaccount.php';
        } else {
            include_once './views/login.php';
        }
    }
    if ($_GET['page'] == 'logout') {
        include_once './views/logout.php';
    }
    if ($_GET['page'] == 'signup') {
        if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {
            include_once './views/myaccount.php';
        } else {
            include_once './views/signup.php';
        }
    }
    
    if ($_GET['page'] == 'connexion') {
        include_once './controller/accountController.php';
        connexion();
    }
    if ($_GET['page'] == "creatAccount") {
        include_once './controller/accountController.php';
        creatAccount();
    }
    if ($_GET['page'] == "proposercours") {
        include_once './views/proposer_cours.php';
    }
    */
} else {
    include_once "views/accueil.php";
}

include_once "models/footer.php";
