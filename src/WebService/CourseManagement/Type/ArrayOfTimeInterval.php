<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfTimeInterval
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeInterval
     */
    private $TimeInterval;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeInterval
     */
    public function getTimeInterval()
    {
        return $this->TimeInterval;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeInterval $TimeInterval
     *
     * @return ArrayOfTimeInterval
     */
    public function withTimeInterval($TimeInterval)
    {
        $new = clone $this;
        $new->TimeInterval = $TimeInterval;

        return $new;
    }
}
