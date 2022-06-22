<?php

//https://code.mu/ru/php/book/oop/methods-chains/
class Arr
{
    private $numbers;

    public function addNumber($numb)
    {
        $this->numbers[] = $numb;
        return $this;
    }

    public function push(array $array)
    {
        $this->numbers = array_merge($this->numbers, $array);
        return $this;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
}

$newArr = new Arr();

echo $newArr->addNumber(3)->addNumber(2)->push([5, 5, 1])->getSum();