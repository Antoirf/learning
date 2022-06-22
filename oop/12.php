<?php

//https://code.mu/ru/php/book/oop/constructor-initial-properties-values/
class Student
{
    private string $name;
    private int $course;

    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 5;
    }

    /**
     * @return int
     */
    public function getCourse(): int
    {
        return $this->course;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function transferToNextCourse()
    {
        if ($this->course < 5) {
            return $this->course++;
        }
        return $this->course;
    }
}

$student = new Student('anton');
$student->transferToNextCourse();
var_dump($student);