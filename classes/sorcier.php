<?php
class Sorcier extends Monster{
    private $type="sorcier";

    public function hitsorcier(Hero $hero){
        $damage = rand(0, 50);
     if($this->type && $hero->getType()==="guerrier"){
         $damage*2;
         $heroHealtpoint=$hero->getPointsDeVieHero();
         $hero->setPointsDeVieHero($heroHealtpoint-$damage);
        }
        return $damage;

 
    } 

   




}



?>