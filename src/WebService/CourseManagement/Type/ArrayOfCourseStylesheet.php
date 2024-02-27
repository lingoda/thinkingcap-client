<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseStylesheet
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseStylesheet>
     */
    private ?array $CourseStylesheet;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseStylesheet>
     */
    public function getCourseStylesheet(): ?array
    {
        return $this->CourseStylesheet;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseStylesheet> $CourseStylesheet
     */
    public function withCourseStylesheet(?array $CourseStylesheet): static
    {
        $new = clone $this;
        $new->CourseStylesheet = $CourseStylesheet;

        return $new;
    }
}
