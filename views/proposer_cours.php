<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposer cours</title>
    <link rel="stylesheet" href="./styles/stylepropcours.css"><!-- On fait un lien avec le css de cette page -->


</head>

<body>
    <div class="tous">
        <div class="container rounded containerform">
            <div class="text-center">
                <form method="POST" action="./controller/addcourse.php" enctype="multipart/form-data">
                    <h1>Ajouter un cours</h1>
                    <br>
                    <h5>Titre</h5>
                    <input class="form-control" name="title" type="text" placeholder="Titre" required>
                    <br>
                    <h5>Matière</h5>
                    <input class="form-control" name="subject" type="text" placeholder="Matière" required>
                    <br>
                    <h5>Contenu</h5>
                    <textarea name="content"></textarea required>
                    <br>
                    <h5>Document</h5>
                    <div class="custom-file">
                        <input type="file" name="imgurl" class="custom-file-input btn-gradient" id="customFileLang" lang="fr">
                        <label class="custom-file-label" for="customFileLang">Sélectionner le fichier</label>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-gradient" value="Suivant">
                </form>
            </div>
        </div>
    </div>
</body>

</html>