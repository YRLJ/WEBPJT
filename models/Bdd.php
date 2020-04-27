<?php

class Bdd
{

    private $connexion;

    public function __construct()
    {
        try {
            $this->connexion = new PDO('mysql:host=localhost:8889;dbname=webpjt;charset=utf8', 'root', 'root');
        } catch (PDOException $Exception) {
            echo "Erreur de connexion à la base de donnée";
            exit;
        }
    }

    public function getInfoAccount($username, $password)
    {
        $sql = 'SELECT * FROM users WHERE username =:username and password=:password';
        $var = $this->connexion->prepare($sql);
        $var->execute([':username' => $username, ':password' => $password]);
        $result = $var->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getInfoCompte($username)
    {
        $sql = 'SELECT * FROM users WHERE username = :username';
        $test = $this->connexion->prepare($sql);
        $test->execute([':username' => $username]);
        $resultat = $test->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }

    public function creatAccount($lastname, $firstname, $username,  $password, $type)
    {
        $sql = 'INSERT INTO users (username, lastname, firstname,  password, type) 
        VALUES (:username, :lastname, :firstname,  :password, :type)';
        $test = $this->connexion->prepare($sql);
        $test->execute([
            ':username' => $username, ':lastname' => $lastname, ':firstname' => $firstname,
            ':password' => $password, ':type' => $type
        ]);
        echo "le compte vient d'être créé";
    }
}
