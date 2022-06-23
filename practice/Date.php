<?php

class Date
{
    private string $date;

    public function __construct($date = null)
    {
        if ($date === null) {
            return $this->date = date('y-m-d');
        }
        return $this->date = $date;
    }

    public function getDay()
    {
        return date('d', strtotime($this->date));
    }

    public function getMonth()
    {
        return date('F', strtotime($this->date));
    }

    public function getYear()
    {
        return date('y', strtotime($this->date));
    }
}

$date = new Date();
print_r($date->getMonth());
