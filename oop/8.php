<?php

//https://code.mu/ru/php/book/oop/getters-and-setters/
class Employee
{
    private string $name;
    private int $age;
    private int $salary;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        if ($this->isAgeCorrect()) {
            $this->age = $age;
        }
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    private function isAgeCorrect()
    {
        if ($this->age >= 1 and $this->age <= 100) {
            return true;
        } else {
            return false;
        }
    }

}