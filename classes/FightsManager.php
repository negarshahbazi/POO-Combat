<?php
class FightsManager {
    public function createMonster() {
        $newMonster = new Monster();
        $newMonster->setNomMonster('Toto');
        $newMonster->setPointsDeVieMonster(100);
        return $newMonster;
    }

    public function fight(Hero $hero, Monster $monster) {
        $combatLog = [];

        while ($hero->getPointsDeVieHero() > 0 && $monster->getPointsDeVieMonster() > 0) {
            // Le monstre attaque en premier
            $damageToHero = $monster->hit($hero);          
            $combatLog[] = $monster->getNomMonster() . " attaque ".$hero->getName()." et lui inflige " . $damageToHero . " points de dégâts.";

            // Vérifier si le héros est toujours en vie
            if ($hero->getPointsDeVieHero() <= 0) {
                $combatLog[] = "Le héros a été vaincu.";
                break;
            }

            // Si le héros survit, il attaque le monstre
            $damageToMonster = $hero->hit($monster);
            $combatLog[] = $hero->getName()."attaque " . $monster->getNomMonster() . " et lui inflige " . $damageToMonster . " points de dégâts.";

            // Vérifier si le monstre est toujours en vie
            if ($monster->getPointsDeVieMonster() <= 0) {
                $combatLog[] = $monster->getNomMonster() . " a été vaincu.";
                break;
            }
        }

        return $combatLog;
    }
}
?>

