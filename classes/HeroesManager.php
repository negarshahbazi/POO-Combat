
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

        $query = $this->db->prepare("INSERT INTO user (name, health_point,type) VALUES (:name,:health_point,:type) ");
        $query->execute([
            ':name' =>$hero->getName(),
            ':health_point'=> $hero->getPointsDeVieHero(),
            ':type'=> $hero->getType()
        ]);
        $id = $this->db->lastInsertId();
        $hero->setId($id);
        $hero->setPointsDeVieHero(100);
    }
    // public function update(Hero $hero)
    // {

    //     $query = $this->db->prepare("INSERT INTO user (name, health_point,type) VALUES (:name,:health_point,:type) ");
    //     $query->execute([
    //         ':name' =>$hero->getName(),
    //         ':health_point'=> $hero->getPointsDeVieHero(),
    //         ':type'=> $hero->getType()
    //     ]);
    //     $id = $this->db->lastInsertId();
    //     $hero->setId($id);
    //     $hero->setPointsDeVieHero(100);
    // }

    public function findAllAlive(){
        // Assuming $db is the correct database connection
        $query = $this->db->prepare("SELECT * FROM user WHERE health_point > 0");
        $query->execute(); // You need to execute the query to get results
       $users= $query->fetchAll(); 
       foreach($users as $user){
        $newHero=new Hero($user);
        $newHero->setId($user['id']);
        $newHero->setPointsDeVieHero($user['health_point']);
       $this->heroes[] = $newHero;
    }

    return $this->heroes;
    }


public function find($id){
    $query = $this->db->query("SELECT * FROM user WHERE id=".$id);
    $fightHero=$query->fetch();
    $hero = new Hero($fightHero);
    $hero->setId($fightHero['id']);
    return  $hero;
}

public function update(Hero $hero){
    $query = $this->db->prepare("UPDATE user SET health_point = :health_point WHERE id = :id");
    $query->execute([
        ':health_point'=> $hero->getPointsDeVieHero(),
        ':id'=> $hero->getId(),
    ]);
  
}
}




?>