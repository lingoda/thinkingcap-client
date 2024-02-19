<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use DateTimeInterface;

class Schedule
{
    private string $ID;

    
    private string $Period;

    
    private int $Frequency;

    
    private int $Day;

    
    private string $DayOfWeek;

    
    private int $WeekNumber;

    
    private string $WeekNumberString;

    
    private int $Month;

    
    private string $TimeZone;

    
    private string $MonthString;

    
    private DateTimeInterface $StartDate;

    
    private DateTimeInterface $EndDate;

    
    private int $Occurences;

    
    private bool $Expired;

    
    private string $StartTime;

    
    private string $EndTime;

    
    private int $Duration;

    
    private string $DurationString;

    
    public function getID(): string
    {
        return $this->ID;
    }

    
    public function withID(string $ID): static
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    
    public function getPeriod(): string
    {
        return $this->Period;
    }

    
    public function withPeriod(string $Period): static
    {
        $new = clone $this;
        $new->Period = $Period;

        return $new;
    }

    
    public function getFrequency(): int
    {
        return $this->Frequency;
    }

    
    public function withFrequency(int $Frequency): static
    {
        $new = clone $this;
        $new->Frequency = $Frequency;

        return $new;
    }

    
    public function getDay(): int
    {
        return $this->Day;
    }

    
    public function withDay(int $Day): static
    {
        $new = clone $this;
        $new->Day = $Day;

        return $new;
    }

    
    public function getDayOfWeek(): string
    {
        return $this->DayOfWeek;
    }

    
    public function withDayOfWeek(string $DayOfWeek): static
    {
        $new = clone $this;
        $new->DayOfWeek = $DayOfWeek;

        return $new;
    }

    
    public function getWeekNumber(): int
    {
        return $this->WeekNumber;
    }

    
    public function withWeekNumber(int $WeekNumber): static
    {
        $new = clone $this;
        $new->WeekNumber = $WeekNumber;

        return $new;
    }

    
    public function getWeekNumberString(): string
    {
        return $this->WeekNumberString;
    }

    
    public function withWeekNumberString(string $WeekNumberString): static
    {
        $new = clone $this;
        $new->WeekNumberString = $WeekNumberString;

        return $new;
    }

    
    public function getMonth(): int
    {
        return $this->Month;
    }

    
    public function withMonth(int $Month): static
    {
        $new = clone $this;
        $new->Month = $Month;

        return $new;
    }

    
    public function getTimeZone(): string
    {
        return $this->TimeZone;
    }

    
    public function withTimeZone(string $TimeZone): static
    {
        $new = clone $this;
        $new->TimeZone = $TimeZone;

        return $new;
    }

    
    public function getMonthString(): string
    {
        return $this->MonthString;
    }

    
    public function withMonthString(string $MonthString): static
    {
        $new = clone $this;
        $new->MonthString = $MonthString;

        return $new;
    }

    
    public function getStartDate(): DateTimeInterface
    {
        return $this->StartDate;
    }

    
    public function withStartDate(DateTimeInterface $StartDate): static
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

        return $new;
    }

    
    public function getEndDate(): DateTimeInterface
    {
        return $this->EndDate;
    }

    
    public function withEndDate(DateTimeInterface $EndDate): static
    {
        $new = clone $this;
        $new->EndDate = $EndDate;

        return $new;
    }

    
    public function getOccurences(): int
    {
        return $this->Occurences;
    }

    
    public function withOccurences(int $Occurences): static
    {
        $new = clone $this;
        $new->Occurences = $Occurences;

        return $new;
    }

    
    public function getExpired(): bool
    {
        return $this->Expired;
    }

    
    public function withExpired(bool $Expired): static
    {
        $new = clone $this;
        $new->Expired = $Expired;

        return $new;
    }

    
    public function getStartTime(): string
    {
        return $this->StartTime;
    }

    
    public function withStartTime(string $StartTime): static
    {
        $new = clone $this;
        $new->StartTime = $StartTime;

        return $new;
    }

    
    public function getEndTime(): string
    {
        return $this->EndTime;
    }

    
    public function withEndTime(string $EndTime): static
    {
        $new = clone $this;
        $new->EndTime = $EndTime;

        return $new;
    }

    
    public function getDuration(): int
    {
        return $this->Duration;
    }

    
    public function withDuration(int $Duration): static
    {
        $new = clone $this;
        $new->Duration = $Duration;

        return $new;
    }

    
    public function getDurationString(): string
    {
        return $this->DurationString;
    }

    
    public function withDurationString(string $DurationString): static
    {
        $new = clone $this;
        $new->DurationString = $DurationString;

        return $new;
    }
}
