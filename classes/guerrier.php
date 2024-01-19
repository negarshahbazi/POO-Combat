<?php

class Guerrier extends Hero{
    public function sword(Monster $monster) {
       $damage = 60;
       $monsterHealtpoint=$monster->getPointsDeVieMonster();
  $monster->setPointsDeVieMonster($monsterHealtpoint-$damage);


  return $damage;
    }
         
}

 



?>