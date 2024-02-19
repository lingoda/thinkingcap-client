<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseSession
{
    private CourseSession $CourseSession;

    
    public function getCourseSession(): CourseSession
    {
        return $this->CourseSession;
    }

    
    public function withCourseSession(CourseSession $CourseSession): static
    {
        $new = clone $this;
        $new->CourseSession = $CourseSession;

        return $new;
    }
}
