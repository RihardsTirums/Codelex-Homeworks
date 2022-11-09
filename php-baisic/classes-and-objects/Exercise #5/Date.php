<?php

class Date {
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year){
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }
    // Get month
    public function getMonth (): int {
        return $this->month;
    }
    // Set Month
    public function setMonth (int $month): int{
        return $this->month = $month;
    }
    // Get day
    public function getDay (): int {
        return $this->day;
    }
    // Set Day
    public function setDay (int $day): int{
        return $this->day = $day;
    }
    // Get year
    public function getYear (): int {
        return $this->year;
    }
    // Set Year
    public function setYear (int $year): int{
        return $this->year = $year;
    }
    // Function that display date
    public function displayDate(int $month,int $day,int $year): string
    {
        return $this->month ."/". $this->day ."/". $this->year;
    }

}
