<?php

//https://code.mu/ru/php/book/oop/using-objects-in-class/
class Arr
{
    private array $nums = [];
    private $sumHelper;

    public function __construct()
    {
        $this->sumHelper = new SumHelper();
    }

    public function Add($number)
    {
        $this->nums[] = $number;
    }
}


class SumHelper
{
    public function getSum2($arr)
    {
        $this->getSum($arr, 2);
    }

    public function getSum3($arr)
    {
        $this->getSum($arr, 3);
    }

    public function getSum($arr, $power)
    {
        $sum = 0;
        foreach ($arr as $value) {
            $sum += pow($value, $power);
        }
        return $sum;
    }
}

class AvgHelper
{
    private $sum;

    public function __construct()
    {
        $this->sum = new SumHelper();
    }

    public function getAvg($arr)
    {
        return $this->sum->getSum($arr, 1);
    }
}

$avg = new AvgHelper();
echo $avg->getAvg([1, 2, 3]);