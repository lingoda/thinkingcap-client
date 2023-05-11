<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class Schedule
{
    /**
     * @var string
     */
    private $ID;

    /**
     * @var string
     */
    private $Period;

    /**
     * @var int
     */
    private $Frequency;

    /**
     * @var int
     */
    private $Day;

    /**
     * @var string
     */
    private $DayOfWeek;

    /**
     * @var int
     */
    private $WeekNumber;

    /**
     * @var string
     */
    private $WeekNumberString;

    /**
     * @var int
     */
    private $Month;

    /**
     * @var string
     */
    private $TimeZone;

    /**
     * @var string
     */
    private $MonthString;

    /**
     * @var \DateTimeInterface
     */
    private $StartDate;

    /**
     * @var \DateTimeInterface
     */
    private $EndDate;

    /**
     * @var int
     */
    private $Occurences;

    /**
     * @var bool
     */
    private $Expired;

    /**
     * @var string
     */
    private $StartTime;

    /**
     * @var string
     */
    private $EndTime;

    /**
     * @var int
     */
    private $Duration;

    /**
     * @var string
     */
    private $DurationString;

    /**
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     *
     * @return Schedule
     */
    public function withID($ID)
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->Period;
    }

    /**
     * @param string $Period
     *
     * @return Schedule
     */
    public function withPeriod($Period)
    {
        $new = clone $this;
        $new->Period = $Period;

        return $new;
    }

    /**
     * @return int
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }

    /**
     * @param int $Frequency
     *
     * @return Schedule
     */
    public function withFrequency($Frequency)
    {
        $new = clone $this;
        $new->Frequency = $Frequency;

        return $new;
    }

    /**
     * @return int
     */
    public function getDay()
    {
        return $this->Day;
    }

    /**
     * @param int $Day
     *
     * @return Schedule
     */
    public function withDay($Day)
    {
        $new = clone $this;
        $new->Day = $Day;

        return $new;
    }

    /**
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }

    /**
     * @param string $DayOfWeek
     *
     * @return Schedule
     */
    public function withDayOfWeek($DayOfWeek)
    {
        $new = clone $this;
        $new->DayOfWeek = $DayOfWeek;

        return $new;
    }

    /**
     * @return int
     */
    public function getWeekNumber()
    {
        return $this->WeekNumber;
    }

    /**
     * @param int $WeekNumber
     *
     * @return Schedule
     */
    public function withWeekNumber($WeekNumber)
    {
        $new = clone $this;
        $new->WeekNumber = $WeekNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getWeekNumberString()
    {
        return $this->WeekNumberString;
    }

    /**
     * @param string $WeekNumberString
     *
     * @return Schedule
     */
    public function withWeekNumberString($WeekNumberString)
    {
        $new = clone $this;
        $new->WeekNumberString = $WeekNumberString;

        return $new;
    }

    /**
     * @return int
     */
    public function getMonth()
    {
        return $this->Month;
    }

    /**
     * @param int $Month
     *
     * @return Schedule
     */
    public function withMonth($Month)
    {
        $new = clone $this;
        $new->Month = $Month;

        return $new;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * @param string $TimeZone
     *
     * @return Schedule
     */
    public function withTimeZone($TimeZone)
    {
        $new = clone $this;
        $new->TimeZone = $TimeZone;

        return $new;
    }

    /**
     * @return string
     */
    public function getMonthString()
    {
        return $this->MonthString;
    }

    /**
     * @param string $MonthString
     *
     * @return Schedule
     */
    public function withMonthString($MonthString)
    {
        $new = clone $this;
        $new->MonthString = $MonthString;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param \DateTimeInterface $StartDate
     *
     * @return Schedule
     */
    public function withStartDate($StartDate)
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param \DateTimeInterface $EndDate
     *
     * @return Schedule
     */
    public function withEndDate($EndDate)
    {
        $new = clone $this;
        $new->EndDate = $EndDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getOccurences()
    {
        return $this->Occurences;
    }

    /**
     * @param int $Occurences
     *
     * @return Schedule
     */
    public function withOccurences($Occurences)
    {
        $new = clone $this;
        $new->Occurences = $Occurences;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExpired()
    {
        return $this->Expired;
    }

    /**
     * @param bool $Expired
     *
     * @return Schedule
     */
    public function withExpired($Expired)
    {
        $new = clone $this;
        $new->Expired = $Expired;

        return $new;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * @param string $StartTime
     *
     * @return Schedule
     */
    public function withStartTime($StartTime)
    {
        $new = clone $this;
        $new->StartTime = $StartTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * @param string $EndTime
     *
     * @return Schedule
     */
    public function withEndTime($EndTime)
    {
        $new = clone $this;
        $new->EndTime = $EndTime;

        return $new;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * @param int $Duration
     *
     * @return Schedule
     */
    public function withDuration($Duration)
    {
        $new = clone $this;
        $new->Duration = $Duration;

        return $new;
    }

    /**
     * @return string
     */
    public function getDurationString()
    {
        return $this->DurationString;
    }

    /**
     * @param string $DurationString
     *
     * @return Schedule
     */
    public function withDurationString($DurationString)
    {
        $new = clone $this;
        $new->DurationString = $DurationString;

        return $new;
    }
}
