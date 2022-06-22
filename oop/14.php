<?php

//https://code.mu/ru/php/book/oop/variable-properties-names/
class City
{
    public string $name;
    public string $foundation;
    public int $population;

    public function __construct($name, $foundation, $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }
}

$city = new City('spb', '1703', 8000000);
$props = ['name', 'foundation', 'population'];
foreach ($props as $prop) {
    echo $city->$prop . PHP_EOL;
}
