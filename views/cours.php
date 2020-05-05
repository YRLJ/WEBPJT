<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nom - Cours</title>
    <link rel="stylesheet" href="./styles/stylecours.css">
</head>





<body>
    <br><br><br>

    <?php
    if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin" || $_SESSION['type'] == "user")) {
        echo "<a href=\"index.php?page=proposercours\" class=\"logbtn\">Proposer un cours</a>";
    } else {
        echo "<a href=\"index.php?page=login\" class=\"logbtn\">Proposer un cours</a>";
    }
    ?>
    <br><br><br>

    <h1>Tous nos cours</h1>

    <!-- Lémuel a mis en commentaire le formulaire ci dessous car pas encore développé-->
<!--
    <div class="tri row">
        <div class="col-2"></div>
        <div class="matieres col-8">
            <p>Choix de(s) matière(s)</p>
            <input type="checkbox" id="anglais" name="anglais ">
            <label for="anglais">Anglais</label>

            <input type="checkbox" id="allemand" name="allemand">
            <label for="allemand">Allemand</label>

            <input type="checkbox" id="chinois" name="chinois">
            <label for="chinois">Chinois</label>

            <input type="checkbox" id="chimie" name="chimie">
            <label for="Chimie">Chimie</label>

            <input type="checkbox" id="mathématiques" name="mathématiques">
            <label for="mathématiques">Mathématiques</label>

            <input type="checkbox" id="web" name="web">
            <label for="web">WEB</label>

            <input type="checkbox" id="reseaux" name="reseaux">
            <label for="reseaux">Réseaux</label>

            <input type="checkbox" id="java" name="java">
            <label for="java">JAVA</label>

            <input type="checkbox" id="cc++" name="cc++">
            <label for="cc++">C/C++</label>
        </div>
        <div class="col-2"></div>
        <div class="col-2 col-lg-4"></div>
        <div class="col-8 col-lg-4">
            <p>Choix de l'ordre</p>
            <select class="custom-select custom-select-sm">
                <option selected>Tri aléatoire</option>
                <option value="1">Trier par : notes croissantes</option>
                <option value="2">Trier par : notes décroissantes</option>
                <option value="3">Trier par : les plus récentes</option>
                <option value="4">Trier par : les plus anciennes</option>
            </select>
        </div>
        <div class="col-2 col-lg-4"></div>
    </div>
-->

    <?php

    include_once './controller/courseController.php';
    $courses = getAllCourses();

    if ($courses != null) {
        echo "<div class=\"touslescours\">";
        foreach ($courses as $course) {
            if ($course['valide'] == 'oui') {
                echo "<a href=\"index.php?page=coursdisplay&id=" . $course["courseid"] . "\">
                <div class=\"cours row\">
                    <div class=\"col-8\" id=\"titre\">
                        <h3>" . $course['title'] . "</h3>
                    </div>
                    <div class=\"col-4\" id=\"note\">
                        <p>Appréciations des élèves (note sur 10 ou étoiles sur 5)</p>
                    </div>
                    <div class=\"col-4\" id=\"duree\">
                        <p>Durée approximative</p>
                    </div>
                    <div class=\"col-8\" id=\"resume\">
                        <p>" . $course['subject'] . "</p>
                    </div>
                </div>
            </a>";
            }
        }
        echo "</div>";
    } else {
        echo "désole vous n'avez pas de cours dans votre BDD";
    }

    ?>


    <!--

    <div class="touslescours">
        <a href="">
            <div class="cours row">
                <div class="col-8" id="titre">
                    <h3>Titre Cours</h3>
                </div>
                <div class="col-4" id="note">
                    <p>Appréciations des élèves (note sur 10 ou étoiles sur 5)</p>
                </div>
                <div class="col-4" id="duree">
                    <p>Durée approximative</p>
                </div>
                <div class="col-8" id="resume">
                    <p>Résumé du cours</p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="cours row">
                <div class="col-8" id="titre">
                    <h3>Cours de probabilité</h3>
                </div>
                <div class="col-4" id="note">
                    <p>8/10</p>
                </div>
                <div class="col-4" id="duree">
                    <p>45min</p>
                </div>
                <div class="col-8" id="resume">
                    <p>Explication des probabilités et exercices.</p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="cours row">
                <div class="col-8" id="titre">
                    <h3>Cours sur les molécules</h3>
                </div>
                <div class="col-4" id="note">
                    <p>7.5/10</p>
                </div>
                <div class="col-4" id="duree">
                    <p>15min</p>
                </div>
                <div class="col-8" id="resume">
                    <p>Explication du princie de molécules.</p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="cours row">
                <div class="col-8" id="titre">
                    <h3>Cours de CSS</h3>
                </div>
                <div class="col-4" id="note">
                    <p>2/10</p>
                </div>
                <div class="col-4" id="duree">
                    <p>45min</p>
                </div>
                <div class="col-8" id="resume">
                    <p>Synthèse explicative du CSS</p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="cours row">
                <div class="col-8" id="titre">
                    <h3>...</h3>
                </div>
                <div class="col-4" id="note">
                    <p>...</p>
                </div>
                <div class="col-4" id="duree">
                    <p>...</p>
                </div>
                <div class="col-8" id="resume">
                    <p>...</p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="cours row">
                <div class="col-8" id="titre">
                    <h3>...</h3>
                </div>
                <div class="col-4" id="note">
                    <p>...</p>
                </div>
                <div class="col-4" id="duree">
                    <p>...</p>
                </div>
                <div class="col-8" id="resume">
                    <p>...</p>
                </div>
            </div>
        </a>


    </div>
-->
</body>

</html>