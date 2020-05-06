<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">

</head>

<body>

<!-- On crée une div avec un texte et une div qui feront une animation quand ils seront appelés-->
    <div id="loading">
        <div class="loading">
            <span>Chargement...</span>
        </div>
    </div>



<!-- On fait un script pour que la div de chargement plus haut s'affiche lorsque la page est en cours de chargement (load) -->
    <script>
        jQuery(window).load(function() {
            jQuery(".loading").fadeOut(200);
        });
    </script>
</body>

</html>