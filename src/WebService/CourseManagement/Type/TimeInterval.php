<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use DateTimeInterface;

class TimeInterval
{
    private DateTimeInterface $StartDate;

    
    private DateTimeInterface $EndDate;

    
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
}
