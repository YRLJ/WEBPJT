<?php

session_start();
include_once 'models/header.php';
include_once('models/navbar.php');

if(isset($_GET['page'])){
    if($_GET['page']=='cours'){
        include_once "views/cours.php";
    }

}
else{
    include_once "views/accueil.php";
}

include_once "models/footer.php";