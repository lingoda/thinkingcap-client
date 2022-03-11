<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseAssignment
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseAssignment
     */
    private $CourseAssignment;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseAssignment
     */
    public function getCourseAssignment()
    {
        return $this->CourseAssignment;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseAssignment $CourseAssignment
     *
     * @return ArrayOfCourseAssignment
     */
    public function withCourseAssignment($CourseAssignment)
    {
        $new = clone $this;
        $new->CourseAssignment = $CourseAssignment;

        return $new;
    }
}
