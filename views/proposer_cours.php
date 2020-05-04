<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposer cours</title>


</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-4 col-sm-3 col-2"></div>
            <div class="col-lg-4 col-sm-6 col-8">
                <div class="form-group">
                    <label for="title">Titre cours</label>
                    <input type="text" name="title" placeholder="Titre cours" required="true">
                </div>
                <div class="form-group">
                    <label for="subject">Sujet du cours</label>
                    <input type="text" name="subject" placeholder="Sujet du cours" required="true">
                </div>
                <div class="form-group">
                    <label for="content">Contenu du cours</label>
                    <textarea name="content" placeholder="Contenu du cours"></textarea>
                </div>

                <label for="image">Image ?</label>
                <input type="checkbox" name="image" id="image">
                <div id="images" style="visibility:hidden">
                    <input name="images" type="file"  />
                </div>

                <label for="image">Vidéo ?</label>
                <input type="checkbox" name="video" id="video">
                <div id="video_data" style="visibility:hidden">
                    <input type="file" name="video_data">
                </div>

                <label for="image">PDF ?</label>
                <input type="checkbox" name="pdf" id="pdf">
                <div id="pdf_data" style="visibility:hidden">
                    <input type="file" name="pdf_data" >
                </div>

                <input type="checkbox" id="check" />
                <div id="container" style="visibility:hidden; border-radius:5px; border:1px solid #829fb3; width:300px; height:20px; background-color:white;"></div>
            </div>
            <div class="col-lg-4 col-sm-3 col-2"></div>
        </div>



        <script type="text/javascript">
            window.onload = function() {
                document.querySelector('#image').onclick = function(e) {
                    if (e.target.checked) {
                        document.querySelector('#images').style.visibility = "visible";
                    } else {
                        document.querySelector('#images').style.visibility = "hidden";
                    }
                }
                document.querySelector('#video').onclick = function(e) {
                    if (e.target.checked) {
                        document.querySelector('#video_data').style.visibility = "visible";
                    } else {
                        document.querySelector('#video_data').style.visibility = "hidden";
                    }
                }
                document.querySelector('#pdf').onclick = function(e) {
                    if (e.target.checked) {
                        document.querySelector('#pdf_data').style.visibility = "visible";
                    } else {
                        document.querySelector('#pdf_data').style.visibility = "hidden";
                    }
                }
            }
        </script>






    </form>
</body>

</html>