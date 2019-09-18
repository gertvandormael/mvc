<?php

// Base controller class that you extend to new and existing controllers.
class Controller 
{
    public $db = null;
    public $model = null;

    // Opens the db connection and loads the model
    function __construct() {
        $this->openConnection();
        $this->model();
    }

    private function openConnection() {
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        
        $this->db = new PDO("mysql:host=127.0.0.1;dbname=mvc", "gert", "becode", $options);
    }


    // creates a new model and passes the db connection to it
    public function model() {
        require_once "../app/models/model.php";
        $this->model = new Model($this->db);
    }

    // Creates the view and passes data to it
    public function view($view, $data = []) {
        require_once "../app/views/" . $view . ".php";
    }
}