<?php
class Home extends Controller 
{
    public function index() {
        $testView = 0;
        if (isset($_POST["test-button"])) {
            $testView = $_POST["test"];
        }
        $this->view("home/index", [test => $testView]);
    }
}
