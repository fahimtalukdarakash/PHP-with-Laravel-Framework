<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    private $products,$product;
    public function index()
    {
        return view('product.add');
    }
    public function create(Request $request)
    {
        Product::newProduct($request);
        return back()->with('message','Product info save successfully');
    }
    public function manage()
    {
        $this->products = Product::all();
        return view('product.manage',['products'=>$this->products]);
    }
    public function updatePage($id)
    {
        $this->product = Product::find($id);
        return view('product.update',['product' => $this->product]);
    }
    public function update(Request $request, $id)
    {
        Product::updateProduct($request,$id);
        return redirect('/manage-product')->with('message', 'Product info update successfully');
    }
}
