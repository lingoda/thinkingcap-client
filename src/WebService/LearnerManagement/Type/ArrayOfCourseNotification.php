<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCourseNotification
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseNotification
     */
    private $CourseNotification;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseNotification
     */
    public function getCourseNotification()
    {
        return $this->CourseNotification;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseNotification $CourseNotification
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
