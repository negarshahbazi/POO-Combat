<?php


class Archer extends Hero {
    public function Arrow(Monster $monster) {
        $damage = 90;
        $monsterHealtpoint=$monster->getPointsDeVieMonster();
   $monster->setPointsDeVieMonster($monsterHealtpoint-$damage);
 
 
   return $damage;
     }
     
    }


?>