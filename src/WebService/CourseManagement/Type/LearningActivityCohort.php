<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use DateTimeInterface;

class LearningActivityCohort
{
    private ?string $ID;

    
    private ?string $Code;

    
    private ?string $Title;

    
    private ?string $Description;

    
    private DateTimeInterface $StartDate;

    
    private DateTimeInterface $DueDate;

    
    private int $MaxEnrollments;

    
    private bool $AllowSelfEnroll;

    
    public function getID(): ?string
    {
        return $this->ID;
    }

    
    public function withID(?string $ID): static
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    
    public function getCode(): ?string
    {
        return $this->Code;
    }

    
    public function withCode(?string $Code): static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    
    public function getTitle(): ?string
    {
        return $this->Title;
    }

    
    public function withTitle(?string $Title): static
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    
    public function getDescription(): ?string
    {
        return $this->Description;
    }

    
    public function withDescription(?string $Description): static
    {
        $new = clone $this;
        $new->Description = $Description;

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

    
    public function getMaxEnrollments(): int
    {
        return $this->MaxEnrollments;
    }

    
    public function withMaxEnrollments(int $MaxEnrollments): static
    {
        $new = clone $this;
        $new->MaxEnrollments = $MaxEnrollments;

        return $new;
    }

    
    public function getAllowSelfEnroll(): bool
    {
        return $this->AllowSelfEnroll;
    }

    
    public function withAllowSelfEnroll(bool $AllowSelfEnroll): static
    {
        $new = clone $this;
        $new->AllowSelfEnroll = $AllowSelfEnroll;

        return $new;
    }
}
