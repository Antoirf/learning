<?php

//https://code.mu/ru/php/book/oop/overriding-of-parent-methods/
class User
{
    private string $name;
    private int $age;

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
        if (strlen($name) >= 3) {
            $this->name = $name;
        }
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
        $this->age = $age;
    }
}