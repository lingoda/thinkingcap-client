<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseNotification
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseNotification
     */
    private $CourseNotification;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseNotification
     */
    public function getCourseNotification()
    {
        return $this->CourseNotification;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseNotification $CourseNotification
     *
     * @return ArrayOfCourseNotification
     */
    public function withCourseNotification($CourseNotification)
    {
        $new = clone $this;
        $new->CourseNotification = $CourseNotification;

        return $new;
    }
}
