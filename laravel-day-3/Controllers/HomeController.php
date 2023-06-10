<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    private $product, $products=[], $singleProduct, $fullName, $result, $data,$index;
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
    public function fullName()
    {
        return view('full-name');
    }
    public function makeFullName(Request $request)
    {
        $this->fullName = $request->first_name.' '.$request->last_name;
        return redirect('/full-name')->with('message', $this->fullName);
//        return back()->with('message', $this->fullName);
    }
    public function calculator()
    {
        return view('calculator');
    }
    public function makeResult(Request $request)
    {
//        switch ($request->choice)
//        {
//            case '+':
//                $this->result = $request->first_number+$request->last_number;
//                break;
//            case '-':
//                $this->result = $request->first_number-$request->last_number;
//                break;
//            default:
//                echo "choose a operator";
//        }
        if($request->choice=='+')
        {
            $this->result = $request->first_number+$request->last_number;
        }
        else
        {
            $this->result = $request->first_number-$request->last_number;
        }
        return redirect('/calculator')->with('result', $this->result);
    }
    public function passwordGenerator()
    {
        return view('password-generator');
    }
    public function newPassword(Request $request)
    {

        $this->data='abcdefghijklmnopqrstuvwxyz1234567890!@#$%^&*?/';
        for($i=0;$i<$request->given_length;$i++)
        {
            $this->index = rand(0, strlen($this->data)-1);
            $this->result .= $this->data[$this->index];
        }
        return redirect('/password-generator')->with('result', $this->result);
    }
}
