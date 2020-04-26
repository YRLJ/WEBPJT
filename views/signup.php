<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="./styles/stylesignup.css">
</head>

<body>
<section class="form-login">

    <form action="index.php?page=creatAccount" method="POST" class="login-form">
        <h1>Inscrivez-vous</h1>
        <div class="txtb">
            <input type="text" name="lastname" required="true">
            <span data-placeholder="Nom"></span>
        </div>
        <div class="txtb">
            <input type="text" name="firstname" required="true">
            <span data-placeholder="Prénom"></span>
        </div>
        <div class="txtb">
            <input type="text" name="username" required="true">
            <span data-placeholder="Pseudonyme"></span>
        </div>

        <div class="txtb">
            <input type="mail" name="mail" required="true">
            <span data-placeholder="E-mail"></span>
        </div>

        <div class="txtb">
            <input type="password" name="password" required="true">
            <span data-placeholder="Mot de passe"></span>
        </div>

        <input type="submit" class="logbtn" value="S'inscrire">

        <div class="bottom-text">
            <p>Vous avez déjà un compte ? <a href="index.php?page=login">Connectez-vous</a></p>
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