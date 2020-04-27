<?php


include_once './models/Bdd.php';

function connexion()
{
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $Bdd = new Bdd();
        $result = $Bdd->getInfoAccount($_POST['username'], $_POST['password']);
        if ($result != null) {
            $_SESSION['connected'] = true;
            $_SESSION['username'] = $result['username'];
            $_SESSION['lastname'] = $result['lastname'];
            $_SESSION['firstname'] = $result['firstname'];
            $_SESSION['mail'] = $result['mail'];
            $_SESSION['password'] = $result['password'];
            header('location: ../WEBPJT/index.php');
        } else {
            $message = 'erreur d\' identification';
            echo "erreur d\'identification";
        }
    }
}

function creatAccount()
{
    if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['username']) && isset($_POST['password'])) {
        $Bdd = new Bdd();
        $Bdd->creatAccount($_POST['lastname'], $_POST['firstname'], $_POST['username'], $_POST['password'], 'user');
        header('location: ../WEBPJT/index.php?page=login');
    }
}
