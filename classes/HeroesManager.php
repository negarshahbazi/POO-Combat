<!-- Définit la classe HeroesManager qui contient tout le CRUD d’un héros :
Enregistrer un nouveau héros en base de données.
Modifier un héros.
Sélectionner un héros.
Récupérer une liste de plusieurs héros vivants.
Savoir si un héros existe. -->
<?php
class HeroesManager{
    private $db ; 
    private array $heroes = [];

    public function __construct(PDO $db){
        $this->db=$db;
    }
public function add(Hero $hero){
    $query = $this->db->prepare("INSERT INTO user SET (name,health_point) ");
    $users = $query->fetchAll();
}





}




?>