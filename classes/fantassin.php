<?php
class Fantassin extends Monster{

    private $type="fantassin";
    public function hitfantassin(Hero $hero){
        $damage = rand(0, 50);
     if($this->type && $hero->getType()==="mage"){
         $damage*2;
         $heroHealtpoint=$hero->getPointsDeVieHero();
         $hero->setPointsDeVieHero($heroHealtpoint-$damage);
         
        }
        return $damage;
 
    } 

}



?>