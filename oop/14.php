<?php

//https://code.mu/ru/php/book/oop/variable-properties-names/
class City
{
    private string $name;
    private string $foundation;
    private int $population;

    public function __construct($name, $foundation, $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }
}

$city = new City('spb', '1703', 8000000);