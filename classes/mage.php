<?php
class Mage extends Hero{
    public function Spell(Monster $monster) {
        $damage = 80;
       $monsterHealtpoint=$monster->getPointsDeVieMonster();
  $monster->setPointsDeVieMonster($monsterHealtpoint-$damage);


  return $damage;
    }
}


?>