<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCourseStylesheet
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseStylesheet>
     */
    private ?array $CourseStylesheet;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseStylesheet>
     */
    public function getCourseStylesheet(): ?array
    {
        return $this->CourseStylesheet;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseStylesheet> $CourseStylesheet
     */
    public function withCourseStylesheet(?array $CourseStylesheet): static
    {
        $new = clone $this;
        $new->CourseStylesheet = $CourseStylesheet;

        return $new;
    }
}
