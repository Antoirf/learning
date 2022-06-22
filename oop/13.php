<?php

//https://code.mu/ru/php/book/oop/declaring-initial-properties-values/
class Arr
{
    private array $numbers = [];

    public function add(array $num)
    {
        $this->numbers = array_merge($this->numbers, $num);
    }

    public function getAvg()
    {
        return array_sum($this->numbers) / count($this->numbers);
    }
}

$arr = new Arr();
$arr->add([1, 2, 3]);
print_r($arr);
$arr->add([4, 5, 6]);
print_r($arr);
print_r($arr->getAvg());