<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-meteor"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Главная</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/Spathiphyllum/image">Спатифиллум</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/Anthurium/image">Антуриум</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/Scheffler/image">Шеффлера</a>
            </li>
        </ul>
        </div>
</nav>
<div class="container">
    <?php 
    $url = $_SERVER["REQUEST_URI"];

    if ($url == "/") {
        require "../views/main.php";
    } elseif (preg_match("#^/Spathiphyllum#", $url)) {
        require "../views/Spathiphyllum.php";
    } elseif (preg_match("#^/Anthurium#", $url)) {
        require "../views/Anthurium.php";
    } elseif (preg_match("#^/Scheffler#", $url)) {
        require "../views/Scheffler.php";
    }
    ?>
</div>
</body>
</html>