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

    public function __construct($name, $surname, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->timestamp = strtotime($birthday);
    }

    /**
     * @return int
     */
    public function getBirthday(): int
    {
        return $this->timestamp;
    }

}