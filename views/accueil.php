<!DOCTYPE html>
<html lang="en">

<head>
    <title>CoEd - Accueil</title>
    <link rel="stylesheet" href="./styles/styleaccueil.css">
</head>

<body>
    <div class="corps">
        <h1 class="titre">CoEd, éducation coopérative.</h1>
        <p class="baseline">Une plateforme de cours à distance, pensée pour les professeurs et les élèves.
            <br>Vous avez tout ce qu'il vous faut sous la main.
        </p>

        <div class="div1" onmouseover="apparition()">
            <h2 class="txt1">Travailler à la maison n'a jamais été aussi simple.</h2>
            <div>
                <img style="height: 700px" class="div2" id="invisible2" src="images/accueil/2.jpg">
            </div>
            <div>
                <p id="invisible"><span style="font-size: 170%">Une solution simple d'utilisation, <br>pour faciliter la vie des élèves :</span><br>
                    - Des cours organisés ;<br>
                    - Utilisable sur toutes les plateformes ;<br>
                    - Lémuel et Jérémy ont bossé dessus et ça ça arrache man<br>
                      (même si c'est des enfoirés)
                </p>
            </div>
        </div>

        <div class="div2">
            <div class="conteneur">
                <span class="txt2">Texte</span>
                <span class="txt3">Texte</span>

            </div>
        </div>
    </div>
    <script>
        function apparition()
        {
            document.getElementById("invisible").style.color = "black";
            document.getElementById("invisible").style.transitionDuration = "2s";
            document.getElementById("invisible2").style.opacity = "1";
            document.getElementById("invisible2").style.transitionDuration = "1s";
        }
    </script>
</body>
</html>