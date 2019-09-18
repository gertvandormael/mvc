<?php
class Model 
{
    // Testing the db connection
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    // sql query 
    public function testQuery() {
        $sql = "SELECT * FROM test";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function nextEntry($id) {
        $sql = "SELECT * FROM test WHERE id = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id);
        $query->execute($parameters);
        return $query->fetchAll();
    }
}


