<?php

session_start();
include_once 'models/header.php';
include_once('models/navbar.php');

if(isset($_GET['page'])){
    if($_GET['page']=='cours'){
        include_once "views/cours.php";
    }
    if($_GET['page'] == 'ajouter'){
        include_once 'views/create_course.php';
    }
    if($_GET['page'] == 'login'){
        include_once './views/login.php';
    }
    if($_GET['page'] == 'signup'){
        include_once './views/signup.php';
    }
}
else{
    include_once "views/accueil.php";
}

include_once "models/footer.php";