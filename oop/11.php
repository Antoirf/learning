<?php

//https://code.mu/ru/php/book/oop/objects-in-array/
class City
{
    private string $name;
    public int $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}

$cityArray = [
    new City('alupka', 500),
    new City('voronezh', 100000),
    new City('phuket', 5000),
    new City('moscow', 20000000),
    new City('city', 1)
];