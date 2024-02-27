<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class TimeIntervalsList
{
    private ?ArrayOfTimeInterval $IntervalsArray;

    
    public function getIntervalsArray(): ?ArrayOfTimeInterval
    {
        return $this->IntervalsArray;
    }

    
    public function withIntervalsArray(?ArrayOfTimeInterval $IntervalsArray): static
    {
        $new = clone $this;
        $new->IntervalsArray = $IntervalsArray;

        return $new;
    }
}
