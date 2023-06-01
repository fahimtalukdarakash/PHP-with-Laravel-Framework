<?php


namespace App\classes;


class Calculator
{
    public $firstNumber, $secondNumber, $choice, $result;
    public function __construct($post)
    {
        $this->firstNumber = (int)$post['first_number'];
        $this->secondNumber = (int)$post['second_number'];
        $this->choice = $post['choice'];
    }

    public function calculator()
    {
        switch ($this->choice)
        {
            case '+':
                $this->result = $this->firstNumber+$this->secondNumber;
                break;
            case '-':
                $this->result = $this->firstNumber-$this->secondNumber;
                break;
            case '*':
                $this->result = $this->firstNumber*$this->secondNumber;
                break;
            case '/':
                $this->result = $this->firstNumber/$this->secondNumber;
                break;
            case '%':
                $this->result = $this->firstNumber%$this->secondNumber;
                break;
            default:
                echo "choose a operator";
        }
        header("Location: action.php?page=calculator&message=$this->result&first_number=$this->firstNumber&second_number=$this->secondNumber");
    }
}