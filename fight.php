<?php
require_once('./config/autoload.php');
require_once('./config/db.php');
$heroesManager = new HeroesManager($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
  $hero = $heroesManager->find($_POST['id']);
  // var_dump($hero);
  }
// démarrage du fight 
$fightManager = new FightsManager();
$monster = $fightManager->createMonster();
$fightResults = $fightManager->fight($hero, $monster);
$heroesManager->update($hero);

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




<body class="fightPage ">

<!-- vs -->
<div class="container">
  <div class=" d-flex justify-content-evenly align-items-center">
    <div class="">
    <h1 class="text-white"><?php echo $hero->getName() ?></h1>
      <h3 class="text-danger">Type :<?php echo $hero->getType() ?></h3>
      
    </div>
    <div ><a href="./index.php"><img class="w-1" src="./assets/vs;.gif" alt=""></a></div>
    <div class="">
    <h1 class="text-white"><?php echo $monster->getNomMonster() ?></h1>
      <h3 class="text-danger">Type :<?php echo $monster->getType() ?></h3>
    </div>
  </div>
  </div>
<!-- report -->
<?php foreach($fightResults as $fightResult){?>

<div class="  d-flex justify-content-center align-items-center text-white">
  <div class="">
    <ul>
      <li>
        <?php echo $fightResult?>


      </li>
    </ul>
  </div>
</div>
<?php } ?>
<!-- hero and monster -->
  <div class=" d-flex justify-content-center align-items-center">
    <div class="mb-5"><img class="image" src="<?php echo $hero->getChoisirHero()?>" alt=""></div>
    <div class="mb-5"><img class="image" src="./assets/monster.gif" alt=""></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>