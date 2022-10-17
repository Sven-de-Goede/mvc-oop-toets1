<?php
  class Country {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getPeople() {
      $this->db->query("SELECT * FROM `people`;");

      $result = $this->db->resultSet();

      return $result;
    }
    public function getSinglePerson($id) {
      $this->db->query("SELECT * FROM people WHERE id = :id");
      $this->db->bind(':id', $id, PDO::PARAM_INT);
      return $this->db->single();
    }

    public function updatePeople($post){
      $this->db->query("UPDATE people 
                        SET name = :name,
                            networth = :networth,
                            age = :age,
                            population = :population
                        WHERE id = :id");

      $this->db->bind(':id', $post["id"], PDO::PARAM_INT);
      $this->db->bind(':name', $post["name"], PDO::PARAM_STR);
      $this->db->bind(':networth', $post["networth"], PDO::PARAM_STR);
      $this->db->bind(':age', $post["age"], PDO::PARAM_STR);
      $this->db->bind(':mycompany', $post["mycompany"], PDO::PARAM_INT);

      return $this->db->execute();
    }
  }
?>

