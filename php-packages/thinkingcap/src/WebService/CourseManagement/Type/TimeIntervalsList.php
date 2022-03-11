<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class TimeIntervalsList
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfTimeInterval
     */
    private $IntervalsArray;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfTimeInterval
     */
    public function getIntervalsArray()
    {
        return $this->IntervalsArray;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfTimeInterval $IntervalsArray
     *
     * @return TimeIntervalsList
     */
    public function withIntervalsArray($IntervalsArray)
    {
        $new = clone $this;
        $new->IntervalsArray = $IntervalsArray;

        return $new;
    }
}
