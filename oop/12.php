<?php

//https://code.mu/ru/php/book/oop/constructor-initial-properties-values/
class Student
{
    private string $name;
    private int $course;

    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 1;
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
        $this->course++;
    }
}
$student = new Student('anton');
$student->transferToNextCourse();
var_dump($student);