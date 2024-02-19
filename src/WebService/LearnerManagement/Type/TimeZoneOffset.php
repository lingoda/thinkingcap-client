<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class TimeZoneOffset
{
    private int $OffsetHours;

    
    private int $OffsetMinutes;

    
    public function getOffsetHours(): int
    {
        return $this->OffsetHours;
    }

    
    public function withOffsetHours(int $OffsetHours): static
    {
        $new = clone $this;
        $new->OffsetHours = $OffsetHours;

        return $new;
    }

    
    public function getOffsetMinutes(): int
    {
        return $this->OffsetMinutes;
    }

    
    public function withOffsetMinutes(int $OffsetMinutes): static
    {
        $new = clone $this;
        $new->OffsetMinutes = $OffsetMinutes;

        return $new;
    }
}
