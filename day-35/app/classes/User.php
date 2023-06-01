<?php


namespace App\classes;


class User
{
    public $users=[], $email, $password;
    public function __construct($post)
    {
        $this->email = $post['email'];
        $this->password = $post['password'];
        $this->users=[
          0=>[
              'id'=>1,
              'name'=>'Antik Kumar Das',
              'email'=>'aj@gmail.com',
              'password'=>'123456',
          ],
          1=>[
              'id'=>2,
              'name'=>'Arman Afridi',
              'email'=>'arman@gmail.com',
              'password'=>'11111',
          ],
          2=>[
              'id'=>3,
              'name'=>'Yeasin Suvo',
              'email'=>'yeasin@gmail.com',
              'password'=>'555555',
          ],
        ];
    }
    public function login()
    {
        foreach($this->users as $user)
        {
            if($user['email']==$this->email && $user['password']==$this->password)
            {
                session_start();
                $_SESSION['id'] = session_id();
                header('Location: action.php?page=home');
            }
        }
        echo 'Email or Password is incorrect';
        exit();
    }
}