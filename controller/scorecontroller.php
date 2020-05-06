<?php 

include_once '../models/Bdd.php';
if( !isset($_SESSION) ){
    session_start();
}

if(isset($_GET['score']) && isset($_GET["id"])){
    $score = $_GET['score'];
    $id = $_GET['id'];
    $username = $_SESSION['username'];
    $bdd = new Bdd();
    $bdd->addScore($id, $score,$username);


}

header("location: ../index.php")

?>