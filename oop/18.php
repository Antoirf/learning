<?php

//https://code.mu/ru/php/book/oop/class-as-methods-set/
class ArrayAvgHelper
{
    public function getAvg1($arr)
    {
        return $this->getSum($arr, 1);

    }

    public function getAvg2($arr)
    {
        return $this->getSum($arr, 2);
    }

    public function getAvg3($arr)
    {
        return $this->getSum($arr, 3);

    }

    private function getSum($arr, $power)
    {
        $sum = 0;
        foreach ($arr as $value) {
            $sum += pow($value, $power);
        }
        return pow($sum, 1 / $power);
    }
}

$arr = new ArrayAvgHelper();

echo $arr->getAvg3([1, 2]);