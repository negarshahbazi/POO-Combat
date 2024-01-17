<?php
require_once('./config/autoload.php');
require_once('./config/db.php');


if (isset($_POST['name']) && !empty($_POST['name'])) {
    $newHero = new HeroesManager($db);
    $newHero->add(new Hero($hero));
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="background ">
    <form action="" method="post" class="d-flex justify-content-center align-items-center form">
        <div class="card text-center m-5 myForm  ">
            <div class="card-header">
                <h1 class="card-title"> Crées votre héros</h1>
            </div>
            <div class="card-body m-5">
                <div>
                <label for=""><h5 class="">Nom du héros :</h5> </label>
                <input type="text" name="name" class="m-2">
                </div>
                <div>
                <label for=""><h5>Type de héros :</h5> </label>
                <input type="text" name="name" value="Guerrier" class="m-2">
                </div>
                <div>
                <a href="#" class="btn btn-primary m-2" name="submit">Créer mon héros</a>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>