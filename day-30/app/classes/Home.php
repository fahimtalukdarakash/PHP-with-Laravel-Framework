<?php


namespace App\classes;
use App\classes\Product;
use App\classes\Category;
class Home
{
    public $product, $products = [], $category, $categories= [];
    public function index()
    {
        $this->product = new Product();
        $this->products = $this->product->getAllProduct();
        $this->category = new Category;
        $this->categories = $this->category->getAllCategory();
        return view('home', ['products' => $this->products, 'categories' => $this->categories]);

    }
}