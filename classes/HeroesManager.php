
<?php
class HeroesManager
{
    private $db;
    private array $heroes = [];

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function add(Hero $hero)
    {
        $query = $this->db->prepare("INSERT INTO user (name, health_point) VALUES (:name,:health_point)");
        $query->execute([
            ':name' =>$hero->getName(),
            ':health_point'=> $hero->getPointsDeVieHero()
        ]);
        $id = $this->db->lastInsertId();
        $hero->setId($id);
        $hero->setPointsDeVieHero(100);
    }

    public function findAllAlive(PDO $db){
        // Assuming $db is the correct database connection
        $query = $db->prepare("SELECT * FROM user WHERE health_point > 0");
        $query->execute(); // You need to execute the query to get results
       $users= $query->fetchAll(); 
       $this->heroes[] = $users;
       return $this->heroes;


    }


}




?>