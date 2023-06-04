<?php


namespace App\classes;
use App\classes\User;

class Auth
{
    public  $user, $users=[];
    public function login($post)
    {
        $this->user = new User();
        $this->users = $this->user->getAllUser();
        foreach ($this->users as $user)
        {
            if($user['email']==$post['email'] && $user['password']==$post['password'])
            {
                header('Location: action.php?page=dashboard');
            }
            else
            {
                continue;
            }
        }
        return "Sorry .. wrong credential.";
    }
    public function logout()
    {
        header('Location: action.php?page=home');
    }
}