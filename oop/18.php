<?php

//https://code.mu/ru/php/book/oop/class-as-methods-set/
class ArrayAvgHelper
{
    public function getAvg1($arr)
    {
        return $this->calcSqrt($this->getSum($arr, 1), 1);


    }

    public function getAvg2($arr)
    {
        return $this->calcSqrt($this->getSum($arr, 2), 2);
    }

    public function getAvg3($arr)
    {
        return $this->calcSqrt($this->getSum($arr, 3), 3);
    }

    private function getSum($arr, $power)
    {
        $sum = 0;
        foreach ($arr as $value) {
            $sum += pow($value, $power);
        }
        return $sum;
    }

    private function calcSqrt($num, $power)
    {
        return pow($num, 1 / $power);

    }
}

$arr = new ArrayAvgHelper();

echo $arr->getAvg2([2, 2]);