<?php
class Model 
{
    // Opening the db conn and testing it
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            die('Database connection could not be established.'. $e->getMessage());
        }
    }

    // functions with sql queries that you execute in the correct controller
    public function allProducts() {
        $sql = "SELECT * FROM test";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function productDetail($id) {
        $sql = "SELECT * FROM test WHERE id = :id";
        $query = $this->db->prepare($sql);
        $parameters = [":id" => $id];
        $query->execute($parameters);
        return $query->fetchAll();
    }

    public function category($type) {
        $sql = "SELECT * FROM test WHERE category = :type";
        $query = $this->db->prepare($sql);
        $parameters = [":type" => $type];
        $query->execute($parameters);
        return $query->fetchAll();
    }

    public function price($min, $max) {
        $sql = "SELECT * FROM test WHERE price BETWEEN :min AND :max";
        $query = $this->db->prepare($sql);
        $parameters = [":min" => $min, ":max" => $max];
        $query->execute($parameters);
        return $query->fetchAll();
    }

    public function shoppingCart($number) {
        $sql = "SELECT * FROM test WHERE article = :number";
        $query = $this->db->prepare($sql);
        $parameters = [":number" => $number];
        $query->execute($parameters);
        return $query->fetchAll();

    }
}