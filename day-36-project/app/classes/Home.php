<?php


namespace App\classes;
use App\classes\News;
use App\classes\Category;
class Home
{
    public $news, $newses = [], $category, $categories= [], $singleNews;
    public function __construct()
    {
        $this->category = new Category;
        $this->categories = $this->category->getAllCategories();
    }

    public function index()
    {
        $this->news=new News();
        $this->newses=$this->news->getAllNewses();
        return view('home', ['categories' => $this->categories,'newses'=>$this->newses]);
    }
    public function categoryNewses($id)
    {
        $this->news = new News();
        $this->newses = $this->news->getCategoryNewses($id);
        return view('category',['newses'=>$this->newses, 'categories'=>$this->categories]);
    }
    public function newsDetail($id)
    {
        $this->news = new News();
        $this->singleNews=$this->news->getNewsById($id);
        return view('detail', ['categories' => $this->categories, 'news' =>$this->singleNews]);
    }
}