<?php
class Shop extends Controller 
{
    public function index() {
        $allData = $this->model->testQuery();
        $this->view("shop/index", [$allData]);
    }

    public function article($id = "") {
        $nextEntry = $this->model->nextEntry($id);
        $this->view("shop/article", ["entry" => $nextEntry]);
    }
}