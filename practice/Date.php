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
        $month = date('F', strtotime($this->date));
        var_dump($month);
        if ($lang === 'en' or $lang === null) {
            return $month;
        }
        return $monthArr[$month];
    }

    public function getYear()
    {
        return date('y', strtotime($this->date));
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
        $weekDay = date('l', strtotime($this->date));
        if ($lang === 'en' or $lang === null) {
            return $weekDay;
        }
        return $ruWeekDayArr[$weekDay];
    }

}


$date = new Date();
print_r($date->getWeekDay('ru'));
