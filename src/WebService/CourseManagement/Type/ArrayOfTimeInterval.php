<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfTimeInterval
{
    private TimeInterval $TimeInterval;

    
    public function getTimeInterval(): TimeInterval
    {
        return $this->TimeInterval;
    }

    
    public function withTimeInterval(TimeInterval $TimeInterval): static
    {
        $new = clone $this;
        $new->TimeInterval = $TimeInterval;

        return $new;
    }
}
