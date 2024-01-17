<?php
require_once('./config/autoload.php');
require_once('./config/db.php');

$newHero = new HeroesManager($db);
if (isset($_POST['name']) && !empty($_POST['name'])&& isset($_POST['submit'])) {
    $newHero->add(new Hero(['name'=>$_POST['name']]) );
}
$users=$newHero->findAllAlive();
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
    <!-- khorus -->
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
                <!-- <div>
                <label for=""><h5>Type de héros :</h5> </label>
                <input type="text" name="name" value="Guerrier" class="m-2">
                </div> -->
                <div>
                <input type="submit" name="submit" class="  btn btn-primary m-2" value="Créer mon héros">

                </div>
            </div>
        </div>
    </form>


<!-- cart -->
<?php foreach($users as $user){?>
    
    <form action=""  class="d-flex justify-content-center align-items-center ">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $user->getName() ?></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    </form>
<?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>