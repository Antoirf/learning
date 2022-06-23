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
        return date('d', $this->timestamp);
    }

    public function getMonth($lang = null)
    {
        $monthArr = ['January' => 'Январь',
            'February' => 'Февраль',
            'March' => 'Март',
            'April' => 'Апрель',
            'May' => 'Май',
            'June' => 'Июнь',
            'July' => 'Июль',
            'August' => 'Август',
            'September' => 'Сентябрь',
            'October' => 'Октябрь',
            'November' => 'Ноябрь',
            'December' => 'Декабрь'];
        $month = date('F', $this->timestamp);
        var_dump($month);
        if ($lang === 'en' or $lang === null) {
            return $month;
        }
        return $monthArr[$month];
    }

    public function getYear()
    {
        return date('Y', $this->timestamp);
    }

    public function getWeekDay($lang = null)
    {
        $ruWeekDayArr = [
            'Monday' => 'Понедельник',
            'Tuesday' => 'Вторник',
            'Wednesday' => 'Среда',
            'Thursday' => 'Четверг',
            'Friday' => 'Пятница',
            'Saturday' => 'Суббота',
            'Sunday' => 'Воскресенье'
        ];
        $weekDay = date('l', $this->timestamp);
        if ($lang === 'en' or $lang === null) {
            return $weekDay;
        }
        return $ruWeekDayArr[$weekDay];
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
        return date('Y-m-d', $this->timestamp);
    }

    public function format($format)
    {
        return date($format, $this->timestamp);
    }
}


$date = new Date();
$date->subYear(2);
echo $date;