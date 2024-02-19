<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCourseVersion
{
    private CourseVersion $CourseVersion;

    
    public function getCourseVersion(): CourseVersion
    {
        return $this->CourseVersion;
    }

    
    public function withCourseVersion(CourseVersion $CourseVersion): static
    {
        $new = clone $this;
        $new->CourseVersion = $CourseVersion;

        return $new;
    }
}
