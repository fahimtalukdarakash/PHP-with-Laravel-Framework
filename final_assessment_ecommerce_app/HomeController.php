<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index', ['products'=>Product::all()]);
    }
    public function detail($id)
    {
        return view('website.detail.index', ['product' => Product::find($id)]);
    }
}
