<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }
    public function create(Request $request)
    {

    }
    public function manage()
    {
        return view('admin.product.manage');
    }
    public function edit()
    {
        return view('admin.product.edit');
    }
    public function update(Request $request, $id)
    {

    }
    public function delete($id)
    {

    }
}
