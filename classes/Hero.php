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
        $this->id;
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





public function hit(){

}


}
