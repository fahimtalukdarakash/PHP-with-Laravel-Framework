<?php


namespace App\classes;
use App\classes\Blog;

class Home
{
    public $blog, $blogs=[], $singleBlog=[];
    public function index()
    {
        $this->blog=new Blog();
        $this->blogs=$this->blog->getAllBlog();
        return view('home',['blogs'=>$this->blogs]);
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function detail($id){
        $this->blog = new Blog();
        $this->singleBlog = $this->blog->getBlogById($id);
        return view('detail',['blog'=>$this->singleBlog]);
    }
}