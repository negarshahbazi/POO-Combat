<?php
require_once('./config/autoload.php');
require_once('./config/db.php');

$newHero = new HeroesManager($db);
if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['submit'])) {
  $newHero->add(new Hero(['name' => $_POST['name']]));
}
$users = $newHero->findAllAlive();
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
          <label for="">
            <h5 class="">Nom du héros :</h5>
          </label>
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
  <?php foreach ($users as $user) { ?>

    <form action="./fight.php" class="d-flex justify-content-center align-items-center  text-center ">
      <div class="card  bg-dark m-5" style="width: 400px;">
        <div class="row  m-1">
          <div class="col-md-6">
            <h5 class="card-title text-danger">Héro existant</h5>

            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-6">
            <div class="card-body">

              <h5 class="card-title text-white"><?php echo $user->getName() ?></h5>
              <p class="card-text text-white"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-heart-pulse-fill text-danger" viewBox="0 0 16 16">
                  <path d="M1.475 9C2.702 10.84 4.779 12.871 8 15c3.221-2.129 5.298-4.16 6.525-6H12a.5.5 0 0 1-.464-.314l-1.457-3.642-1.598 5.593a.5.5 0 0 1-.945.049L5.889 6.568l-1.473 2.21A.5.5 0 0 1 4 9z" />
                  <path d="M.88 8C-2.427 1.68 4.41-2 7.823 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C11.59-2 18.426 1.68 15.12 8h-2.783l-1.874-4.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8z" />
                </svg> <?php echo $user->getPointsDeVieHero() ?> HP</p>
              <!-- button -->
              <input type="hidden" name="id" value="<?php echo $user->getId() ?>">

              <input type="submit" name="bouton" class="  btn btn-primary m-2" value="Choisir">


            </div>
          </div>
        </div>
      </div>
    </form>
  <?php } ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>