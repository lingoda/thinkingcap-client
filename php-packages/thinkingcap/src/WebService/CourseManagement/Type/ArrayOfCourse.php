<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourse
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course
     */
    private $Course;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course
     */
    public function getCourse()
    {
        return $this->Course;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course $Course
     *
     * @return ArrayOfCourse
     */
    public function withCourse($Course)
    {
        $new = clone $this;
        $new->Course = $Course;

        return $new;
    }
}
