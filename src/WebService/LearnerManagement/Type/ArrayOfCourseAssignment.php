<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCourseAssignment
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseAssignment>
     */
    private ?array $CourseAssignment;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseAssignment>
     */
    public function getCourseAssignment(): ?array
    {
        return $this->CourseAssignment;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseAssignment> $CourseAssignment
     */
    public function withCourseAssignment(?array $CourseAssignment): static
    {
        $new = clone $this;
        $new->CourseAssignment = $CourseAssignment;

        return $new;
    }
}
