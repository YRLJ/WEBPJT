<?php

class Bdd
{

    private $connexion;

    public function __construct()   //on construit une connexion à la BDD
    {
        try {
            $this->connexion = new PDO('mysql:host=localhost;dbname=webpjt;charset=utf8', 'root', 'root');
        } catch (PDOException $Exception) {
            echo "Erreur de connexion à la base de donnée";
            exit;
        }
    }

    public function getInfoAccount($username, $password)        //function qui fait la requete pour recupérer les informations d'un compte ou le username et le mdp correspondent (c.a.d que le mdp et le username sont correct)
    {
        $sql = 'SELECT * FROM users WHERE username =:username and password=:password';
        $var = $this->connexion->prepare($sql);
        $var->execute([':username' => $username, ':password' => $password]);
        $result = $var->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getInfoCompte($username)            //fonction qui recupère toutes les informations d'un compte avec le username (clé primaire)
    {
        $sql = 'SELECT * FROM users WHERE username = :username';
        $test = $this->connexion->prepare($sql);
        $test->execute([':username' => $username]);
        $resultat = $test->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }

    public function creatAccount($lastname, $firstname, $username,  $password, $type)       //fonction qui crée un compte 
    {
        $sql = 'INSERT INTO users (username, lastname, firstname,  password, type) 
        VALUES (:username, :lastname, :firstname,  :password, :type)';
        $test = $this->connexion->prepare($sql);
        $test->execute([
            ':username' => $username, ':lastname' => $lastname, ':firstname' => $firstname,
            ':password' => $password, ':type' => $type
        ]);
    }

    public function getCourses()
    {       //fonction qui récupère tous les cours présent dans la BDD
        $sql = 'SELECT * FROM courses';
        $var = $this->connexion->prepare(($sql));
        $var->execute();
        $courses = $var->fetchAll(PDO::FETCH_ASSOC);
        return $courses;
    }

    public function getAccountIdCourses($username)
    {         //fonction qui récupère les cours suivit par un compte
        $sql = 'SELECT courseid FROM usercourses WHERE username = :username';
        $var = $this->connexion->prepare($sql);
        $var->execute([":username" => $username]);
        $idcourses = $var->fetchAll(PDO::FETCH_ASSOC);
        return $idcourses;
    }

    public function getCourseById($id)
    {         //fonction qui récupère un cours grâce à son ID
        $sql = 'SELECT * FROM courses where courseid = :id';
        $var = $this->connexion->prepare($sql);
        $var->execute([":id" => $id]);
        $course = $var->fetch(PDO::FETCH_ASSOC);
        return $course;
    }
    public function getCourseByTitle($title)
    {         //fonction qui récupère un cours grâce à son ID
        $sql = 'SELECT * FROM courses where title = :title';
        $var = $this->connexion->prepare($sql);
        $var->execute([":title" => $title]);
        $course = $var->fetch(PDO::FETCH_ASSOC);
        return $course;
    }

    public function deleteCourseWithId($courseid)
    {          //fonction qui supprime un cours avec l'id (ici le cours n'a pas vraiment supprimer il a juste sont valide = delete)
        $sql = 'DELETE FROM courses WHERE courseid = :courseid';
        $var = $this->connexion->prepare($sql);
        $var->execute([':courseid' => $courseid]);
    }

    public function valideCourseWithId($courseid)
    {          //fonction qui valide un cours avec l'id, son valide = oui
        $sql = 'UPDATE courses
        SET valide = "oui"
        WHERE courseid = :courseid';
        $var = $this->connexion->prepare($sql);
        $var->execute([":courseid" => $courseid]);
    }

    public function getUrlQuizWithIdCourse($courseid)
    {      //fonction qui récupère l'url d'un Quizz avec l'id du Quizz
        $sql = 'SELECT quiz_url FROM quiz WHERE courseid = :courseid';
        $var = $this->connexion->prepare($sql);
        $var->execute([":courseid" => $courseid]);
        $urlQuiz = $var->fetch(PDO::FETCH_ASSOC);
        return $urlQuiz;
    }

    public function addCourseToAccount($courseid, $username)
    {       //fonction qui ajoute un cours a un certain compte
        $sql = 'INSERT INTO `usercourses` (`idusercourses`, `score`, `username`, `courseid`) VALUES (NULL, NULL, :username, :courseid)';
        $var = $this->connexion->prepare($sql);
        $var->execute([':username' => $username, ':courseid' => $courseid]);
    }

    public function addScore($courseid , $score , $username){   //fonction qui ajoute un score à un cours que possède un compte
        $sql = "UPDATE usercourses SET score = :score WHERE username = :username AND courseid= :courseid ";
        $var = $this->connexion->prepare($sql);
        $var->execute([":score"=>$score,":username"=>$username, ":courseid"=>$courseid ]);
        
    }

    public function addQuiz($url , $courseid ) {
        $sql = "INSERT INTO `quiz`(`quiz_url`, `courseid`) VALUES (:url, :courseid)";
        $var = $this->connexion->prepare($sql);
        $var->execute([':url' => $url , ":courseid" => $courseid]);
    }

    public function createCourse($url , $title , $content , $subject){
        $valide = "non";
        $sql = "INSERT INTO `courses`( `subject`, `title`, `content`, `url`, `valide`) VALUES (:subject,:title,:content,:url,:valide)";
        $var = $this->connexion->prepare($sql);
        $var->execute([":subject"=>$subject , ":title" => $title , ":content" => $content , ":url" => $url , ":valide" => $valide]);
    }

   
}

/*
'SELECT * FROM courses WHERE valide is null';
'UPDATE courses
SET valide = "non"
WHERE courseid = 2';
*/
