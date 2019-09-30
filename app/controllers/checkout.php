<?php
class Checkout extends Controller 
{
    public function index() {
        $cart = $this->model->shoppingCart($_COOKIE["cart"]);
        $this->view("checkout/index", ["cart" => $cart]);
    }
}