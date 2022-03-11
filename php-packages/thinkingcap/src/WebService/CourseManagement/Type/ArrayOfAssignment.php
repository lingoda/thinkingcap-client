<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfAssignment
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Assignment
     */
    private $Assignment;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Assignment
     */
    public function getAssignment()
    {
        return $this->Assignment;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Assignment $Assignment
     *
     * @return ArrayOfAssignment
     */
    public function withAssignment($Assignment)
    {
        $new = clone $this;
        $new->Assignment = $Assignment;

        return $new;
    }
}
