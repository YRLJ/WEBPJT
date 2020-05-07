<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoEd - Inscription</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="./styles/stylesignup.css"><!-- On fait un lien vers le CSS de cette page -->
</head>

<body>
    <div class="tous">
        <!-- Div qui permet d'avoir le footer en bas de page meme lorsque la page n'est pas rempli -->
        <section class="form-login"><!-- Section qui comprend tous le formulaire -->

            <form action="index.php?page=creatAccount" method="POST" class="login-form"><!-- Formulaire de signup -->
                <h1>Inscrivez-vous</h1>
                <div class="txtb"><!-- Div qui demande le nom de famille de l'utilisateur --> 
                    <input type="text" name="lastname" required="true">
                    <span data-placeholder="Nom"></span>
                </div>
                <div class="txtb"><!-- Div qui demande le prénom de l'utilisateur --> 
                    <input type="text" name="firstname" required="true">
                    <span data-placeholder="Prénom"></span>
                </div>
                <div class="txtb"><!-- Div qui demande le username de l'utilisateur --> 
                    <input type="text" name="username" required="true">
                    <span data-placeholder="Pseudonyme"></span>
                </div>

                <div class="txtb"><!-- Div qui demande le password de l'utilisateur --> 
                    <input type="password" name="password" required="true">
                    <span data-placeholder="Mot de passe"></span>
                </div>

                <input type="submit" class="logbtn" value="S'inscrire"><!-- Bouton qui permet la création du compte -->

                <div class="bottom-text"><!-- Div qui permet à l'utilisateur de se connecter -->
                    <p>Vous avez déjà un compte ? <a href="index.php?page=login">Connectez-vous</a></p>
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