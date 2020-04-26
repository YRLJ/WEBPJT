<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="index.php"><img src="./images/logoweb.svg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?page=ajouter"><i class="fas fa-plus-square"></i> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="index.php?page=cours"><i class="fas fa-book-open icon fa-lg"></i></a>
            </li>
            <?php if ($_SESSION['connected'] == true) {
                echo "<li class=\"nav-item\"><a href=\"index.php?page=logout\"><i class=\"fas fa-sign-out-alt\"></i></i></a></li>";
            } ?>

            <li class="nav-item">
                <a href="index.php?page=login"><i class="fas fa-user-circle icon fa-lg"></i></a>
            </li>
        </ul>
    </nav>
</body>

</html>