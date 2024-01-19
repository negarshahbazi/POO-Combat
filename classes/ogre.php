<?php


class Ogre extends Monster{
    private $type="ogre";
   public function hitorge(Hero $hero){
       $damage = rand(0, 50);
    if($this->type && $hero->getType()==="archer"){
        $damage*2;
        $heroHealtpoint=$hero->getPointsDeVieHero();
        $hero->setPointsDeVieHero($heroHealtpoint-$damage);
        
    }
    return $damage;

   } 
 // + de vie que le sorcier 
 // mais moins d'energie

 // fantassin + de degats que l'ogre
 // 

}


?>