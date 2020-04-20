<?php

session_start();

if(isset($_GET['page'])){
    if($_GET['page']=='cours'){
        include_once "./views/cours.php";
    }

}
else{
    include_once "./views/accueil.php";
}