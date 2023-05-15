<?php


namespace App\classes;


class HelloWorld
{
    public $message,$firstName, $lastName;

    public function __construct()
    {
//        $this->message="Hello World";
    }
    public function index()
    {
        $this->firstName=true;
        $this->lastName="BITM";
        echo gettype($this->firstName);
//        echo $this->message;
//        echo 'Full name is: '.$this->firstName .' ' . $this->lastName;
    }
}