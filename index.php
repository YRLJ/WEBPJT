<?php

session_start();
include_once './models/header.php';
include_once './models/loader.php';
include_once './models/navbar.php';

if (isset($_GET['page'])) {
    if($_GET['page'] == 'createquiz'){
        include_once 'views/quizcreator.php';
    }
    if ($_GET['page'] == 'cours') {
        include_once "views/cours.php";
    }
    if ($_GET['page'] == 'ajouter') {
        include_once 'views/create_course.php';
    }
    if ($_GET['page'] == 'login') {
        if ( isset($_SESSION['type']) && ($_SESSION['type'] == "admin" ||$_SESSION['type'] == "user")) {
            include_once './views/myaccount.php';
        } else {
            include_once './views/login.php';
        }
    }
    if ($_GET['page'] == 'logout') {
        include_once './views/logout.php';
    }
    if ($_GET['page'] == 'signup') {
        if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" ||$_SESSION['type'] == "user")) {
            include_once './views/myaccount.php';
        } else {
            include_once './views/signup.php';
        }
    }
    if ($_GET['page'] == 'connexion') {
        include_once './controller/accountController.php';
        connexion();
    }
    if($_GET['page'] == "creatAccount"){
        include_once './controller/accountController.php';
        creatAccount();
    }
    if($_GET['page'] == "proposercours"){
        include_once './views/proposer_cours.php';
    }
} else {
    include_once "views/accueil.php";
}

include_once "models/footer.php";
