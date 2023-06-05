<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    private $x;
    protected $y;
    public $z;
    public function __construct()
    {
        $this->message="Hello World";
        $this->x=10;
        $this->y=20;
    }
    public function create()
    {
        echo 'in create';
    }
    protected function manage()
    {
        echo 'in manage';
    }
    private function index(){
        echo 'hello world';
//        $this->z = $this->x + $this->y;
////        echo $this->message;
//        echo $this->z;
//        echo '<br/>';
////        echo $this->x++;
//        echo '<br/>';
//        echo $this->x;
//        echo '<br/>';
//        echo - $this->x;
//        echo '<br/>';
//        echo $this->x += $this->y;
//        echo '<br/>';
//        echo $this->x;
    }
}