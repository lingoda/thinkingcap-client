<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class TimeZoneOffset
{
    /**
     * @var int
     */
    private $OffsetHours;

    /**
     * @var int
     */
    private $OffsetMinutes;

    /**
     * @return int
     */
    public function getOffsetHours()
    {
        return $this->OffsetHours;
    }

    /**
     * @param int $OffsetHours
     *
     * @return TimeZoneOffset
     */
    public function withOffsetHours($OffsetHours)
    {
        $new = clone $this;
        $new->OffsetHours = $OffsetHours;

        return $new;
    }

    /**
     * @return int
     */
    public function getOffsetMinutes()
    {
        return $this->OffsetMinutes;
    }

    /**
     * @param int $OffsetMinutes
     *
     * @return TimeZoneOffset
     */
    public function withOffsetMinutes($OffsetMinutes)
    {
        $new = clone $this;
        $new->OffsetMinutes = $OffsetMinutes;

        return $new;
    }
}
