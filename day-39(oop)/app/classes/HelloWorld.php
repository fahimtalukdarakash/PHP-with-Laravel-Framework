<?php


namespace App\classes;

use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;

class HelloWorld extends User implements ExampleOne, ExampleTwo
{
    use Teacher;
    public $message;
    private $x;
    protected $y;
    public $z;
    public $user;
    public static $country = 'Bangladesh';
    public function __construct()
    {
        $this->message="Hello World";
        $this->x=10;
        $this->y=20;
        $this->a=500;
    }
    public static function hai()
    {
        echo 'hello hai';
    }
    public function create()
    {
//        echo 'in create';
//          echo $this->cityCell();
        echo self::$country;
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

    public function one()
    {
        // TODO: Implement one() method.
        echo 'interface one';
    }

    public function two()
    {
        // TODO: Implement two() method.
        echo 'interface two';
    }

    public function three()
    {
        // TODO: Implement three() method.
        echo 'interface three';
    }
    public function talk()
    {
        // TODO: Implement talk() method.
    }
    public function run()
    {
        // TODO: Implement run() method.
    }
    public function sleep()
    {
        // TODO: Implement sleep() method.
    }
}