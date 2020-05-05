<?php

session_start();
include_once './models/header.php';     //on fait un header qui possède les style qui sont présent partout
include_once './models/loader.php';     //on affiche le loader pour qu'il soit présent quand la page charge
include_once './models/navbar.php';     //on affiche la navbar

if (isset($_GET['page'])) {     //si le $_GET['page'] est set alors on rentre dans la boucle
    switch ($_GET['page']) {        //on fait un switch case pour les differentes page
        case 'createquiz': //page de création d'un quiz
            include_once './views/quizcreator.php';
            break;
        case 'quiz':
            include_once './views/quiz.php';
            break;

        case 'cours':       //page qui affiche tous les cours présent sur le site 
            include_once "./views/cours.php";
            if ($_SESSION['message'] != null) {     //si on a un message a afficher
                echo '<script type="text/javascript">window.alert("' . $_SESSION['message'] . '");</script>';
                $_SESSION['message']=null;  //on le met égale a null pour pas le réafficher
            }
            break;

        case 'coursdisplay':        //page qui affiche un cours en détails
            include_once "./views/coursedisplay.php";
            break;

        case 'login':       //lorsque l'on veut se connecter a son compte
            if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {        //premier cas l'utilisateur est connecté
                include_once './views/myaccount.php';       //donc on affiche la page mon compte
            } else {        //deuxieme cas l'utilisateur n'est pas connecté
                include_once './views/login.php';       //donc on lui affiche la page de connexion
            }
            break;

        case 'login2':      //cas ou l'utilisateur c'est trompé de MDP ou de pseudo
            $message = 'Mauvais pseudonyme ou mot de passe. Merci de réessayer.';       //on lui écrit un message 
            echo '<script type="text/javascript">window.alert("' . $message . '");</script>';       //qu'on lui affiche en JS sous forme de popup
            include_once './views/login.php';       //puis on lui raffiche la page de login

            break;

        case 'logout':      //l'utilisateur veut se deconnecter
            include_once './views/logout.php';
            break;

        case 'signup':      //l'utilisateur veut créer un compte
            if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {        //on vérifie si il est connecté
                include_once './views/myaccount.php';       //il est déjà connecter donc on lui affiche moncompte
            } else {        //il n'est pas connecté
                include_once './views/signup.php';      //on lui affiche la page de création de compte
            }
            break;

        case 'connexion':       //on fait la connexion du compte
            include_once './controller/accountController.php';      //on appelle la page accountController qui s'occupe des comptes
            connexion();        //et on fait une connexion
            break;

        case "creatAccount":        //on fait la création d'un compte
            include_once './controller/accountController.php';      //on appelle la page accountController qui s'occupe des comptes
            creatAccount();     //et on fait la création d'un compte
            break;

        case "proposercours":       //l'utilisateur veut proposer un cours
            if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {    //on vérifie qu'il soit bien connecté 
                include_once './views/proposer_cours.php';      //on lui affiche alors la page pour proposer un cours
            } else {      //il n'est pas connecté 
                header('location: ../WEBPJT/index.php?page=login');     //donc on renvoit l'utilisateur vers la page de login
            }
            break;

        case "administrateur":      //l'utilisateur veut se connecter au dashboard administrateur
            if ($_SESSION['type'] == "admin") {     //on vérifie qu'il soit bien admin
                include_once './views/administrateur.php';      //et donc on lui affiche le dashboard
            } else {  //sinon on le ramène à l'accueil
                header('location: ../WEBPJT/index.php');
            }
            break;

        case "deletecourse":    //l'administrateur veut supprimer un cours qui a été proposer par un membre du site
            include_once './controller/courseController.php';       //on ouvre la page courseController qui controle les cours
            deleteCourse();     //et on supprime le cours
            break;

        case "validecourse":        //l'administrateur veut valider un cours qui a été proposé par un membre du site
            include_once './controller/courseController.php';       //on ouvre la page courseController qui controle les cours
            valideCourse();     //et on valide le cours
            break;

        case "addcourseaccount":       //un utilisateur veut suivre le cours sur lequel il a cliqué 
            if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {    //on vérifie qu'il soit bien connecté 
                include_once './controller/courseController.php';       //on inclue le controller des cours
                addCourseToAccount($_GET['id']);
                header('location: ../WEBPJT/index.php?page=cours');
            } else {      //il n'est pas connecté 
                header('location: ../WEBPJT/index.php?page=login');     //donc on renvoit l'utilisateur vers la page de login
            }
            break;
    }
} else {    //le $_GET['page'] n'est pas set alors on affiche la page d'accueil
    include_once "./views/accueil.php";
}

include_once "./models/footer.php";     //pour que le footer soit présent à chaque page on affiche le footer
