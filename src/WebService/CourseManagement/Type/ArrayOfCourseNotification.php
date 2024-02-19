<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseNotification
{
    private CourseNotification $CourseNotification;

    
    public function getCourseNotification(): CourseNotification
    {
        return $this->CourseNotification;
    }

    
    public function withCourseNotification(CourseNotification $CourseNotification): static
    {
        $new = clone $this;
        $new->CourseNotification = $CourseNotification;

        return $new;
    }
}
