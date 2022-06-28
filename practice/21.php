<?php

class User
{
    private string $name;
    private string $surname;

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

class Student extends User
{
    private int $course;

    public function __construct($name, $surname, $course)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->course = $course;
    }

    /**
     * @return int
     */
    public function getCourse(): int
    {
        return $this->course;
    }

}