<?php

class Date
{
    private string $timestamp;

    public function __construct($date = null)
    {
        if ($date === null) {
            $this->timestamp = strtotime(date('Y-m-d'));
        } else {
            $this->timestamp = strtotime($date);
        }
    }


    public function getDay()
    {
        return $this->format('d');
    }

    public function getMonth($lang = null)
    {
        if ($lang === 'en') {
            return $this->getMonthOnEng();
        }
        if ($lang === 'ru') {
            return $this->getMonthOnRus();
        }
        return $this->getNumMonth();
    }

    private function getMonthOnEng()
    {
        return $this->format('F');
    }

    private function getNumMonth()
    {
        return $this->format('n');
    }

    private function getMonthOnRus()
    {
        $monthArr = [
            'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль',
            'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
        ];
        return $monthArr[$this->getNumMonth() - 1];
    }

    public function getYear()
    {
        return $this->format('Y');
    }

    public function getWeekDay($lang = null)
    {
        if ($lang === 'en') {
            return date('l', $this->timestamp);
        }
        if ($lang === 'ru') {
            return $this->getWeekDayOnRus();
        }
        return $this->getNumbWeekDay();
    }

    private function getNumbWeekDay()
    {
        return $this->format('N');
    }

    private function getWeekDayOnRus()
    {
        $ruWeekDayArr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
        return $ruWeekDayArr[$this->getNumbWeekDay() - 1];
    }

    public function addDay($days)
    {
        $this->timestamp += $days * 60 * 60 * 24;
    }

    public function subDay($days)
    {
        $this->timestamp -= $days * 60 * 60 * 24;
    }

    public function addMonth($num)
    {
        $this->timestamp = strtotime('+' . $num . ' month', $this->timestamp);
    }

    public function subMonth($num)
    {
        $this->timestamp = strtotime('-' . $num . ' month', $this->timestamp);
    }

    public function addYear($num)
    {
        $this->timestamp = strtotime('+' . $num . ' year', $this->timestamp);
    }

    public function subYear($num)
    {
        $this->timestamp = strtotime('-' . $num . ' year', $this->timestamp);
    }

    public function __toString()
    {
        return $this->format();
    }

    public function format($format = 'Y-m-d')
    {
        return date($format, $this->timestamp);
    }
}


$date = new Date();
echo $date->getWeekDay('en');