<?php


namespace App\classes;
use App\classes\Product;
use App\classes\Category;
use App\classes\FullName;
class Home
{
    public $product, $products = [], $category, $categories= [], $singleProduct;
    public function __construct()
    {
        $this->category = new Category;
        $this->categories = $this->category->getAllCategory();
    }

    public function index()
    {
        $_SESSION['name']='Rofiqul Islam';
        $this->product = new Product();
        $this->products = $this->product->getAllProduct();
        return view('home', ['products' => $this->products, 'categories' => $this->categories]);

    }
    public function categoryProduct($id)
    {
        $this->product = new Product();
        $this->products = $this->product->getCategoryProduct($id);
        return view('category',['products'=>$this->products, 'categories'=>$this->categories]);
    }
    public function productDetail($id)
    {
        $this->product = new Product();
        $this->singleProduct=$this->product->getProductById($id);
        return view('detail', ['categories' => $this->categories, 'product' =>$this->singleProduct]);
    }
    public function fullName()
    {
        return view('full-name', ['categories' => $this->categories]);
    }
    public function calculator()
    {
        return view('calculator',['categories' => $this->categories]);
    }
    public function seriesOne()
    {
        return view('series-one',['categories'=>$this->categories]);
    }
    public function seriesTwo()
    {
        return view('series-two',['categories'=>$this->categories]);
    }
    public function seriesThree()
    {
        return view('series-three',['categories'=>$this->categories]);
    }
    public function login($message=null)
    {
        return view('login',['categories'=>$this->categories, 'message'=>$message]);
    }
    public function dashboard()
    {
        return view('dashboard',['categories'=>$this->categories]);
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        header('Location: action.php?page=login');
    }
}