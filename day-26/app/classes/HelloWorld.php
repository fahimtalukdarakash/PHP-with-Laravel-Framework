<?php


namespace App\classes;


class HelloWorld
{
    public $message, $x, $y, $z,$i,$data=[];
    public function __construct()
    {
        $this->message='Hello world';
        $this->x=10;
        $this->y=20;
//        $this->data = [10,20,30,'+012 345 6789','info@example.com',true,100.28];
    }
    public function index(){
//        for($this->i=10;$this->i<15;$this->i++){
//            echo '<br/>'.$this->i;
//        }
//        $this->i=10;
//        do{
//            echo '<br/>'.$this->i;
//            $this->i++;
//        }while($this->i>20);
//       $this->z=$this->x+$this->y;
//       switch ($this->z){
//           case 10:
//               echo 'Hello World';
//               break;
//           case 20:
//               echo 'Hello Bangladesh';
//               break;
//           case 30:
//               echo 'Hello BITM';
//               break;
//           default:
//               echo 'Hello BASIS';
//       }
//        foreach ($this->data as $key=>$item)
//        {
//            echo '<br/>'.$key.' '.$item;
//        }
        $this->data=[
            0 => [
                'name'  => 'Johir',
                'email' => 'johir@example.com',
                'mobile'=> '123213'
            ],
            1 => [
                'name' => 'arman',
                'email'=> 'arman@example.com',
                'mobile'=>'34235423423'
            ],
            2 => [
                'name'  => 'AJ',
                'email' => 'aj@exaxmple.com',
                'mobile'=> '324342434534'
            ]
        ];
        foreach ($this->data as $index)
        {
            foreach ($this->data[$index] as $key => $item){
                echo '<br/>'.$key.' '.$item;
            }
        }
    }
}