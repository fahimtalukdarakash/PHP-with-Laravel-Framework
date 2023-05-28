<?php


namespace App\classes;
use App\classes\Product;
use App\classes\Category;
class Home
{
    public $product, $products = [], $category, $categories= [], $singleProduct;
    public function index()
    {
        $this->product = new Product();
        $this->products = $this->product->getAllProduct();
        $this->category = new Category;
        $this->categories = $this->category->getAllCategory();
        return view('home', ['products' => $this->products, 'categories' => $this->categories]);

    }
    public function categoryProduct($id)
    {
        $this->product = new Product();
        $this->products = $this->product->getCategoryProduct($id);
        $this->category = new Category;
        $this->categories = $this->category->getAllCategory();
        return view('category',['products'=>$this->products, 'categories'=>$this->categories]);
    }
    public function productDetail($id)
    {
        $this->category = new Category;
        $this->categories = $this->category->getAllCategory();
        $this->product = new Product();
        $this->singleProduct=$this->product->getProductById($id);
        return view('detail', ['categories' => $this->categories, 'product' =>$this->singleProduct]);
    }
}