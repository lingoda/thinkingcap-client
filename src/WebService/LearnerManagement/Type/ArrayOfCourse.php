<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCourse
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Course
     */
    private $Course;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Course
     */
    public function getCourse()
    {
        return $this->Course;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Course $Course
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
