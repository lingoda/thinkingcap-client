<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseSeries
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseSeries
     */
    private $CourseSeries;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseSeries
     */
    public function getCourseSeries()
    {
        return $this->CourseSeries;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseSeries $CourseSeries
     *
     * @return ArrayOfCourseSeries
     */
    public function withCourseSeries($CourseSeries)
    {
        $new = clone $this;
        $new->CourseSeries = $CourseSeries;

        return $new;
    }
}
