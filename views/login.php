<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoEd - Connexion</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="./styles/stylelogin.css">
</head>

<body>
<section class="form-login">

    <form action="index.php?page=connexion" method="POST" class="login-form">
        <h1>Connectez-vous</h1>
        <div class="txtb">
            <input type="text" id="username" name="username" required="true">
            <span data-placeholder="Pseudonyme"></span>
        </div>

        <div class="txtb">
            <input type="password" id="password" name="password" required="true">
            <span data-placeholder="Mot de passe"></span>
        </div>

        <input type="submit" class="logbtn" name="submit" value="Se connecter">

        <div class="bottom-text">
            <p>Vous n'avez pas de compte ? <a href="index.php?page=signup">Inscrivez-vous</a></p>
        </div>
    </form>
</section>

    <script type="text/javascript">
        $(".txtb input").on("focus", function() {
            $(this).addClass("focus");
        })

        $(".txtb input").on("b", function() {
            if($(this).val() == '')
            $(this).removeClass("focus");
        })
    </script>

</body>

</html>