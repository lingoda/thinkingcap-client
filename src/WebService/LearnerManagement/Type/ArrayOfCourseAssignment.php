<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCourseAssignment
{
    private CourseAssignment $CourseAssignment;

    
    public function getCourseAssignment(): CourseAssignment
    {
        return $this->CourseAssignment;
    }

    
    public function withCourseAssignment(CourseAssignment $CourseAssignment): static
    {
        $new = clone $this;
        $new->CourseAssignment = $CourseAssignment;

        return $new;
    }
}
