<?php
class Monster{

    private $nomMonster;
    private $pointsDeVieMonster;


public function setNomMonster($nomMonster){
    $this->nomMonster=$nomMonster;
}
public function getNomMonster(){
  return  $this->nomMonster;
}
public function setPointsDeVieMonster($pointsDeVieMonster){
    $this->pointsDeVieMonster=$pointsDeVieMonster;
}
public function getPointsDeVieMonster(){
  return  $this->pointsDeVieMonster;
}



public function hit(Hero $hero){
    // Générez des dégâts aléatoires par le héros, par exemple entre 5 et 20
    $damage = rand(0, 50);
    $heroHealtpoint=$hero->getPointsDeVieHero();
    $hero->setPointsDeVieHero($heroHealtpoint-$damage);
  
    // Vous pouvez également ajouter des logiques supplémentaires ici si nécessaire
  
    return $damage;
  }









  
//   public function receiveDamage($damage)
// {
//     // Deduct the received damage from the hero's health points
//     $this->setPointsDeVieMonster($this->getPointsDeVieMonster() - $damage);

//     // Ensure the hero's health points don't go below zero
//     if ($this->getPointsDeVieMonster() < 0) {
//         $this->setPointsDeVieMonster(0);
//     }
// }
}


?>