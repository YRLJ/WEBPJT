<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    
</head>

<body>

<div class="loading">
    <span>Loading...</span>
</div>





<!--
    <div class="loader">
        <h1>Veuillez patientez pendant le chargement de la page.</h1>
    </div>
-->
    <script>
        jQuery(window).load(function() {
            jQuery(".loading").fadeOut(200);
        });
    </script>
</body>

</html>