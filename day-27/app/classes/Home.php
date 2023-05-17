<?php


namespace App\classes;


class Home
{
    public $students=[];
    public function __construct()
    {
        $this->students=[
            0=>[
                'id'    => 1,
                'name'  =>'Arman',
                'email' =>'arman@gmail.com',
                'mobile'=>[
                    'personal'  =>'1231231231',
                    'parent'    =>'7898797979'
                ],
                'image' =>'1.jpg'
            ],
            1=>[
                'id'    => 2,
                'name'  =>'Johir',
                'email' =>'johir@gmail.com',
                'mobile'=>[
                    'personal'  =>'456456456',
                    'parent'    =>'9845893458'
                ],
                'image' =>'2.jpg'
            ],
            2=>[
                'id'    => 3,
                'name'  =>'Aj',
                'email' =>'aj@gmail.com',
                'mobile'=>[
                    'personal'  =>'348539593',
                    'parent'    =>'6578458758'
                ],
                'image' =>'3.jpg'
            ],
        ];
    }
    public function index()
    {
//        foreach($this->students as $student){
//            foreach ($student as $key=>$value){
//                if(is_array($value)){
//                    foreach ($value as $item=>$item_number){
//                        echo '<br/>'.$item.' : '.$item_number;
//                    }
//                }
//                else{
//                    echo '<br/>'.$key.' : '.$value;
//                }
//            }
//            echo '<br/>';
//        }
//        echo '<pre>';
//        var_dump($this->students);
//        print_r($this->students);
//          $data = ['name'=>'BITM', 'city'=>'Dhaka'];
//          echo $data['name'];
        return view('home',['students'=>$this->students]);
    }
}