<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCourse
{
    private Course $Course;

    
    public function getCourse(): Course
    {
        return $this->Course;
    }

    
    public function withCourse(Course $Course): static
    {
        $new = clone $this;
        $new->Course = $Course;

        return $new;
    }
}
