<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourse
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course>
     */
    private ?array $Course;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course>
     */
    public function getCourse(): ?array
    {
        return $this->Course;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course> $Course
     */
    public function withCourse(?array $Course): static
    {
        $new = clone $this;
        $new->Course = $Course;

        return $new;
    }
}
