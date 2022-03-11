<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCourseStylesheet
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseStylesheet
     */
    private $CourseStylesheet;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseStylesheet
     */
    public function getCourseStylesheet()
    {
        return $this->CourseStylesheet;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseStylesheet $CourseStylesheet
     *
     * @return ArrayOfCourseStylesheet
     */
    public function withCourseStylesheet($CourseStylesheet)
    {
        $new = clone $this;
        $new->CourseStylesheet = $CourseStylesheet;

        return $new;
    }
}
