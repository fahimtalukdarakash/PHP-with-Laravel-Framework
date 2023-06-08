<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    private $product, $products=[], $singleProduct;
    public function index()
    {
        $this->product=new Product();
        $this->products=$this->product->getAllProduct();
        return view('home',['products'=>$this->products]);
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $this->product=new Product();
        $this->singleProduct=$this->product->getProductById($id);
        return view('detail',['singleProduct'=>$this->singleProduct]);
    }
}
