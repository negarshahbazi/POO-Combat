<?php
class Hero
{   private $id;
    private $name;
    private $pointsDeVieHero = 100;

    public function __construct(array $hero){  
        $this->name = $hero['name'];
     
    }



    public function setId($id)
    {
        $this->id=$id;
    }
    public function getId()
    {
        return $this->id;
    }



    public function getName()
    {
        return $this->name;
    }


    public function setPointsDeVieHero($pointsDeVieHero)
    {
        $this->pointsDeVieHero=$pointsDeVieHero;
    }

    public function getPointsDeVieHero()
    {
        return $this->pointsDeVieHero;
    }

   



public function hit(Monster $monster){
  // Générez des dégâts aléatoires par le héros, par exemple entre 5 et 20
  $damage = rand(0, 50);
  $monsterHealtpoint=$monster->getPointsDeVieMonster();
  $monster->setPointsDeVieMonster($monsterHealtpoint-$damage);

  // Vous pouvez également ajouter des logiques supplémentaires ici si nécessaire

  return $damage;
}














// public function receiveDamage($damage)
// {
//     // Deduct the received damage from the hero's health points
//     $this->setPointsDeVieHero($this->getPointsDeVieHero() - $damage);

//     // Ensure the hero's health points don't go below zero
//     if ($this->getPointsDeVieHero() < 0) {
//         $this->setPointsDeVieHero(0);
//     }
// }
}



