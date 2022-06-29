<?php

//https://code.mu/ru/php/book/oop/passing-objects-by-parameter/
class Product
{
    private string $name;
    private int $quantity;
    private int $price;

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
}