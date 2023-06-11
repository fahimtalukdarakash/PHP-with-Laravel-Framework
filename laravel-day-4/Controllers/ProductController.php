<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.add');
    }
    public function create(Request $request)
    {
        DB::table('products')->insert([
            'product_name'=>$request->product_name,
            'product_category'=>$request->product_category,
            'product_brand'=>$request->product_brand,
            'product_price'=>$request->product_price,
            'product_image'=>$request->product_image,
            'product_description'=>$request->product_description,
        ]);
        return 'success';
    }
}
