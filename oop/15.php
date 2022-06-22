<?php
//https://code.mu/ru/php/book/oop/variable-methods-names/
class Friend
{
    private string $name;
    private int $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}

$friend = new Friend('vasya', 50);
$methods = ['method1' => 'getName', 'method2' => 'getAge'];
echo $friend->{$methods['method1']}() . PHP_EOL;
echo $friend->{$methods['method2']}();