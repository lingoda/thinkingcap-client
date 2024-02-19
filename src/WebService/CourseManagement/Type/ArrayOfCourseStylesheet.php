<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseStylesheet
{
    private CourseStylesheet $CourseStylesheet;

    
    public function getCourseStylesheet(): CourseStylesheet
    {
        return $this->CourseStylesheet;
    }

    
    public function withCourseStylesheet(CourseStylesheet $CourseStylesheet): static
    {
        $new = clone $this;
        $new->CourseStylesheet = $CourseStylesheet;

        return $new;
    }
}
