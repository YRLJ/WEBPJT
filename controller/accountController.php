<?php


include_once './models/Bdd.php';        //on inclut la page BDD pour faire la connexion a la bdd et pour faire les fonction

function connexion()    //fonction qui permet a un compte de se connecter
{
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $Bdd = new Bdd();
        $result = $Bdd->getInfoAccount($_POST['username'], $_POST['password']);
        if ($result != null) {      //si le resultat est différent de nul (c.a.d qu'il existe un compte avec le pseudo et le mdp) alors on stocke en session les info du compte
            $_SESSION['username'] = $result['username'];
            $_SESSION['lastname'] = $result['lastname'];
            $_SESSION['firstname'] = $result['firstname'];
            $_SESSION['password'] = $result['password'];
            $_SESSION['type'] = $result['type'];
            header('location: ../WEBPJT/index.php');
        } else {        //si le résultat est nul alors l'utilisateur c'est trompé de mot de passe ou de pseudo donc on lui demande de se reconnecter
            header('location: ../WEBPJT/index.php?page=login2');
        }
    }
}

function creatAccount()//fonction qui crée un nouveau compte avec un nom, un prenom, un pseudo et un mot de passe.
{
    if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['username']) && isset($_POST['password'])) {
        $Bdd = new Bdd();
        $Bdd->creatAccount($_POST['lastname'], $_POST['firstname'], $_POST['username'], $_POST['password'], 'user');    //de base le type de l'utilisateur est user
        header('location: ../WEBPJT/index.php?page=login'); //après la création du compte on lui demande de se connecter
    }
}
