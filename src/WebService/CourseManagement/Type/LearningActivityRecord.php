<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use DateTimeInterface;

class LearningActivityRecord
{
    private string $StudentID;

    
    private string $StudentName;

    
    private string $StudentEmail;

    
    private string $Status;

    
    private string $Success;

    
    private int $Score;

    
    private DateTimeInterface $DateEnrolled;

    
    private DateTimeInterface $DateStarted;

    
    private DateTimeInterface $DateCompleted;

    
    private DateTimeInterface $DueDate;

    
    public function getStudentID(): string
    {
        return $this->StudentID;
    }

    
    public function withStudentID(string $StudentID): static
    {
        $new = clone $this;
        $new->StudentID = $StudentID;

        return $new;
    }

    
    public function getStudentName(): string
    {
        return $this->StudentName;
    }

    
    public function withStudentName(string $StudentName): static
    {
        $new = clone $this;
        $new->StudentName = $StudentName;

        return $new;
    }

    
    public function getStudentEmail(): string
    {
        return $this->StudentEmail;
    }

    
    public function withStudentEmail(string $StudentEmail): static
    {
        $new = clone $this;
        $new->StudentEmail = $StudentEmail;

        return $new;
    }

    
    public function getStatus(): string
    {
        return $this->Status;
    }

    
    public function withStatus(string $Status): static
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    
    public function getSuccess(): string
    {
        return $this->Success;
    }

    
    public function withSuccess(string $Success): static
    {
        $new = clone $this;
        $new->Success = $Success;

        return $new;
    }

    
    public function getScore(): int
    {
        return $this->Score;
    }

    
    public function withScore(int $Score): static
    {
        $new = clone $this;
        $new->Score = $Score;

        return $new;
    }

    
    public function getDateEnrolled(): DateTimeInterface
    {
        return $this->DateEnrolled;
    }

    
    public function withDateEnrolled(DateTimeInterface $DateEnrolled): static
    {
        $new = clone $this;
        $new->DateEnrolled = $DateEnrolled;

        return $new;
    }

    
    public function getDateStarted(): DateTimeInterface
    {
        return $this->DateStarted;
    }

    
    public function withDateStarted(DateTimeInterface $DateStarted): static
    {
        $new = clone $this;
        $new->DateStarted = $DateStarted;

        return $new;
    }

    
    public function getDateCompleted(): DateTimeInterface
    {
        return $this->DateCompleted;
    }

    
    public function withDateCompleted(DateTimeInterface $DateCompleted): static
    {
        $new = clone $this;
        $new->DateCompleted = $DateCompleted;

        return $new;
    }

    
    public function getDueDate(): DateTimeInterface
    {
        return $this->DueDate;
    }

    
    public function withDueDate(DateTimeInterface $DueDate): static
    {
        $new = clone $this;
        $new->DueDate = $DueDate;

        return $new;
    }
}
