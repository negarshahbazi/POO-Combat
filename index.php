<?php
require_once('./config/autoload.php');
require_once('./config/db.php');

// var_dump($_POST['choisirHero']);
$newHero = new HeroesManager($db);
// $_SERVER['REQUEST_METHOD'] === 'POST'****c'est pour quend je refresh la page le cart ajout pas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['type']) && isset($_POST['choisirHero'])) {
  $selectedSrc = $_POST['choisirHero'];
  $newHero->add(new Hero([
    'name' => $_POST['name'],
    'type' => $_POST['type'],
    'src' => $selectedSrc
  ]));
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

<body class="bg-dark background d-flex flex-column justify-content-center align-items-center">

  <!-- khorus -->
  
  <form action="" method="post" class="place d-flex  justify-content-center align-items-center form opacity-100 w-100 bg-transparent ">
    <div class="container">
    <div class="card text-center  myForm bg-transparent ">
      <div class="card-header">
        <h1 class="card-title text-white"> Crées votre héros</h1>
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center card-body m-5 text-center">
        <div>
          <label for=""></label>
            <h2 class="text-white">Nom du héros :</h2>
          
          <input type="text" name="name" class="">
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center ">
          <h2 class="text-center text-white typeofhero">Type de héros :</h2>
          <select name="type" id="">
            <option value="Guerrier">Guerrier</option>
            <option value="mage">mage</option>
            <option value="archer">archer</option>

          </select>
        </div>
        </div>
        <!-- circle -->
        <div class="row ">
          <label for="choisirHero">
            <h1 class="text-white">Choisir un Héro :</h1>
          </label>

          <?php
          $predefinedImages = [
              './assets/combat.webp',
              './assets/combat9.gif',
              './assets/combat6.gif',
              './assets/giphy4.webp',
              './assets/giphy12.webp',
              './assets/combat2.webp'
          ];

          foreach ($predefinedImages as $imageSrc) {
              ?>
            <div class="  col-4 shadow hover">
              <button type="submit" name="choisirHero" value="<?php echo $imageSrc; ?>" class="bg-transparent rounded-pill w-75 h-75">
                <img class="w-100 h-100" src="<?php echo $imageSrc; ?>" alt="">
              </button>
            </div>
          <?php
          }
          ?>
        </div>
        <div>
          <!-- <input type="submit" name="submit" class="  btn btn-primary m-2" value="Créer mon héros"> -->

        </div>
      </div>
      <div class=" text-center d-flex justify-content-center align-items-center "><img class="man"src="./assets/poster.webp" alt=""></div>
    </div>

</form>
  

  <!-- cart -->
  <div class="d-flex flex-wrap-reverse flex-row justify-content-center align-items-center  text-center m-3 ">
    <?php foreach ($users as $user) { ?>
      <form action="./fight.php" method="post">
        <div class="card backcart " style="width: 300px;">
          <div class="row">
            <div class="col-6 border-right ">
              <h5 class="card-title text-danger">Héro existant</h5>
              <img src="<?php echo $user->getChoisirHero()?>" class="img-fluid rounded-start w-50 h-50" alt="...">
            </div>

            <div class="col-6 border-left">
              <div class="card-body">
                <h5 class="card-title text-black"><?php echo $user->getName() ?></h5>
                <h6 class="card-title text-black">Type:<?php echo $user->getType() ?></h6>
                <p class="card-text text-black"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-heart-pulse-fill text-danger" viewBox="0 0 16 16">
                    <path d="M1.475 9C2.702 10.84 4.779 12.871 8 15c3.221-2.129 5.298-4.16 6.525-6H12a.5.5 0 0 1-.464-.314l-1.457-3.642-1.598 5.593a.5.5 0 0 1-.945.049L5.889 6.568l-1.473 2.21A.5.5 0 0 1 4 9z" />
                    <path d="M.88 8C-2.427 1.68 4.41-2 7.823 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C11.59-2 18.426 1.68 15.12 8h-2.783l-1.874-4.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8z" />
                  </svg> <?php echo $user->getPointsDeVieHero() ?> HP</p>
                <!-- button -->
                <input type="hidden" name="id" value="<?php echo $user->getId() ?>">

                <input type="submit" name="bouton" class="  btn btn-danger m-2" value="Choisir">


              </div>
            </div>
          </div>
        </div>
      </form>
    <?php } ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>