<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoEd - Connexion</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="./styles/stylelogin.css"><!-- On fait un lien avec le CSS de cette page -->
</head>

<body>
    <div class="tous"><!-- Div qui permet d'avoir le footer en bas de page meme lorsque la page n'est pas rempli -->
        <section class="form-login"><!-- Section qui comprend tous le formulaire -->

            <form action="index.php?page=connexion" method="POST" class="login-form"><!-- Formulaire de login -->
                <h1>Connectez-vous</h1>
                <div class="txtb"><!-- Div qui demande le username de l'utilisateur --> 
                    <input type="text" id="username" name="username" required="true">
                    <span data-placeholder="Pseudonyme"></span>
                </div>

                <div class="txtb"><!-- Div qui demande le password de l'utilisateur -->
                    <input type="password" id="password" name="password" required="true">
                    <span data-placeholder="Mot de passe"></span>
                </div>

                <input type="submit" class="logbtn" name="submit" value="Se connecter"><!-- Bouton pour se connecter -->

                <div class="bottom-text"><!-- Div qui permet à l'utilisateur de s'inscrire si il n'a pas de compte -->
                    <p>Vous n'avez pas de compte ? <a href="index.php?page=signup">Inscrivez-vous</a></p>
                </div>
            </form>
        </section>
    </div>

    <!-- Script qui permet de donner un effet de progression lorsque l'utilisateur clique sur une case a remplir -->
    <script type="text/javascript">
        $(".txtb input").on("focus", function() {
            $(this).addClass("focus");
        })

        $(".txtb input").on("b", function() {
            if ($(this).val() == '')
                $(this).removeClass("focus");
        })
    </script>

</body>

</html>