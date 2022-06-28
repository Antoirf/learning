<?php

class User
{
    protected string $name;
    protected string $surname;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
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
    public function getSurname(): string
    {
        return $this->surname;
    }

}

class Employee extends User
{
    private string $timestamp;
    private int $age;
    private int $salary;

    public function __construct($name, $surname, $birthday, $salary)
    {
        parent::__construct($name, $surname);
        $this->timestamp = strtotime($birthday);
        $this->age = $this->calculateAge($birthday);
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return date('Y-m-d', $this->timestamp);
    }

    private function calculateAge($birthday)
    {
        if (date('m', strtotime(date('Y-m-d'))) > date('m', strtotime($birthday))) {
            return date('Y', strtotime(date('Y-m-d'))) - date('Y', strtotime($birthday));
        } else {
            return date('Y', strtotime(date('Y-m-d'))) - date('Y', strtotime($birthday)) - 1;
        }
    }

    /**
     * @return int|string
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

}

$employee = new Employee('kolya', 'ivanov', '1992-07-10', 1000);
echo $employee->getAge();