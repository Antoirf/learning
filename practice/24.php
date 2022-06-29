<?php

//https://code.mu/ru/php/book/oop/passing-objects-by-parameter/
class Product
{
    private string $name;
    private int $quantity;
    private int $price;

    public function __construct($name, $quantity, $price)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    public function getCost()
    {
        return $this->getPrice() * $this->getQuantity();
    }
}

class Cart
{
    private array $product;

    public function add()
    {
        $this->product[] = new Product();
    }

    public function remove($name)
    {
        unset($this->product[$name]);
    }

}

$product = new Product('orex', 2, 100);
echo $product->getCost();
