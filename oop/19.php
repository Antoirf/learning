<?php

//https://code.mu/ru/php/book/oop/classes-inheritance/
class User
{
    private string $name;
    private int $age;

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
}

class Employee extends User
{
    private int $salary;

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
}

class Student extends User
{
    private int $course;

    /**
     * @return int
     */
    public function getCourse(): int
    {
        return $this->course;
    }

    /**
     * @param int $course
     */
    public function setCourse(int $course): void
    {
        $this->course = $course;
    }
}
class Programmer extends Employee
{
    private array $langs;

    /**
     * @return array
     */
    public function getLangs(): array
    {
        return $this->langs;
    }

    /**
     * @param array $langs
     */
    public function setLangs(array $langs): void
    {
        $this->langs = $langs;
    }
}
class Driver extends Employee
{
    private int $driverExperience;
    private array $licenseCategory;

    /**
     * @return int
     */
    public function getDriverExperience(): int
    {
        return $this->driverExperience;
    }

    /**
     * @param int $driverExperience
     */
    public function setDriverExperience(int $driverExperience): void
    {
        $this->driverExperience = $driverExperience;
    }

    /**
     * @return array
     */
    public function getLicenseCategory(): array
    {
        return $this->licenseCategory;
    }

    /**
     * @param array $licenseCategory
     */
    public function setLicenseCategory(array $licenseCategory): void
    {
        $this->licenseCategory = $licenseCategory;
    }
}