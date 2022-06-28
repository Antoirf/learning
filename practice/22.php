<?php

//https://code.mu/ru/php/book/oop/passing-objects-by-reference/
class Product
{
    private string $name;
    private int $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

$product1 = new Product('banana', 10);
$product2 = $product1;
