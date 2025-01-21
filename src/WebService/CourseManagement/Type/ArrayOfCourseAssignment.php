<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseAssignment
{
    /**
     * @var null | array<int<0,max>, CourseAssignment>
     */
    private ?array $CourseAssignment = null;

    /**
     * @return null | array<int<0,max>, CourseAssignment>
     */
    public function getCourseAssignment(): ?array
    {
        return $this->CourseAssignment;
    }

    /**
     * @param null | array<int<0,max>, CourseAssignment> $CourseAssignment
     */
    public function withCourseAssignment(?array $CourseAssignment): static
    {
        $new = clone $this;
        $new->CourseAssignment = $CourseAssignment;

        return $new;
    }
}
