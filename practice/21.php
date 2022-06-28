<?php

class User
{
    protected string $name;
    protected int $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
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
    public function getAge(): int
    {
        return $this->age;
    }

}

class Student extends User
{
    private int $course;

    public function __construct($name, $age, $course)
    {
        $this->name = $name;
        $this->age = $age;
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