<?php


namespace App\classes;


class Series
{
    public $startingNumber, $endingNumber, $choice, $result,$i;
    public function __construct($post)
    {
        $this->startingNumber = (int)$post['starting_number'];
        $this->endingNumber = (int)$post['ending_number'];
    }
    public function seriesOne()
    {
        if($this->startingNumber<$this->endingNumber)
        {
            for($this->i = $this->startingNumber; $this->i<=$this->endingNumber; $this->i++)
            {
                $this->result.= $this->i.' ';
            }
        }
        else
        {
            for($this->i = $this->startingNumber; $this->i>=$this->endingNumber; $this->i--)
            {
                $this->result.= $this->i.' ';
            }
        }
        header("Location: action.php?page=series_one&message=$this->result&starting_number=$this->startingNumber&ending_number=$this->endingNumber");
    }
    public function seriesTwo($post)
    {
        $this->choice = $post['choice'];
        if($this->choice=='even')
        {
            for($this->i = $this->startingNumber; $this->i<=$this->endingNumber; $this->i++)
            {
                if($this->i%2==0)
                {
                    $this->result.=$this->i.' ';
                }
                else
                {
                    continue;
                }
            }
        }
        elseif($this->choice=='odd')
        {
            for($this->i = $this->startingNumber; $this->i<=$this->endingNumber; $this->i++)
            {
                if($this->i%2!=0)
                {
                    $this->result.=$this->i.' ';
                }
                else
                {
                    continue;
                }
            }
        }
        header("Location: action.php?page=series_two&message=$this->result&starting_number=$this->startingNumber&ending_number=$this->endingNumber");
    }
    public function seriesThree()
    {
        if($this->startingNumber<$this->endingNumber)
        {
            for($this->i = $this->startingNumber; $this->i<=$this->endingNumber; $this->i++)
            {
                $this->result= $this->result+$this->i;
            }
        }
        else
        {
            for($this->i = $this->startingNumber; $this->i>=$this->endingNumber; $this->i--)
            {
                $this->result= $this->result+$this->i;
            }
        }
        header("Location: action.php?page=series_three&message=$this->result&starting_number=$this->startingNumber&ending_number=$this->endingNumber");
    }
}