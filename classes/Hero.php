<?php
class Hero
{   private  $id;
    private  $name;
    private $type;
    private  $pointsDeVieHero = 100;
    private $choisirHero;

    public function __construct(array $hero){  
        $this->name = $hero['name'];
        $this->type = $hero['type'];
        $this->choisirHero = $hero['src'];
     
    }
    public function getChoisirHero(){
        return $this->choisirHero;
    }

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }


    public function setName($name){
         $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }

    public function setType($type){
        $this->type=$type;
   }
   public function getType(){
       return $this->type;
   }
    public function setPointsDeVieHero($pointsDeVieHero) {
        $this->pointsDeVieHero=$pointsDeVieHero;
    }

    public function getPointsDeVieHero(){
        return $this->pointsDeVieHero;
    }

   



    public function hit(Monster $monster){
        // Générez des dégâts aléatoires par le héros
        $damage = rand(0, 50);
 
  $monsterHealtpoint=$monster->getPointsDeVieMonster();
  $monster->setPointsDeVieMonster($monsterHealtpoint-$damage);


  return $damage;
}















}



