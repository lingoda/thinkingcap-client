<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseSeries
{
    private CourseSeries $CourseSeries;

    
    public function getCourseSeries(): CourseSeries
    {
        return $this->CourseSeries;
    }

    
    public function withCourseSeries(CourseSeries $CourseSeries): static
    {
        $new = clone $this;
        $new->CourseSeries = $CourseSeries;

        return $new;
    }
}
