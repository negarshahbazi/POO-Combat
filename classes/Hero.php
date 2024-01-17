<?php
// Définit la classe Hero avec :
// 2 propriétés :
// Son nom (unique).
// Ses points de vie.
// 1 méthode :
// frapper un monstre.
class Hero
{
    private $nomHero;
    private $pointsDeVieHero;

    public function __construct($hero)
    {
        $this->nomHero = $hero['name'];
        $this->pointsDeVieHero = $hero['health_point'];
    }
    public function getNomHero()
    {
        $this->nomHero;
    }
    public function getPointsDeVieHero()
    {
        $this->pointsDeVieHero;
    }

public function hit(){

}


}
