<?php
//https://code.mu/ru/php/book/oop/constructor/
class Employee1
{
    public string $name;
    public int $age;
    public int $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$employee1 = new Employee1('eric', 25, 1000);
$employee2 = new Employee1('kyle', 30, 2000);
echo $employee1->salary + $employee2->salary;