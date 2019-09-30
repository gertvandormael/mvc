<?php
class Shop extends Controller 
{
    public function index() {
        $allData = $this->model->allProducts();
        $this->view("shop/index", ["allProducts" => $allData]);
    }

    public function article($id = "") {
        $nextEntry = $this->model->productDetail($id);
        $this->view("shop/article", ["product" => $nextEntry]);
    }

    public function category($type = "") {
        $category = $this->model->category($type);
        $this->view("shop/category", ["category" => $category]);
    }

    public function price($min = "", $max = "") {
        $price = $this->model->price($min, $max);
        $this->view("shop/price", ["price" => $price]);
    }

    public function addCart($article = "") {
        setcookie("cart", $article, time()+3600, "/");
        header("Location: http://mvc.local/public/shop/");
    }
}