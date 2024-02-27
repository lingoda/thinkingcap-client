<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseSeries
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseSeries>
     */
    private ?array $CourseSeries;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseSeries>
     */
    public function getCourseSeries(): ?array
    {
        return $this->CourseSeries;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseSeries> $CourseSeries
     */
    public function withCourseSeries(?array $CourseSeries): static
    {
        $new = clone $this;
        $new->CourseSeries = $CourseSeries;

        return $new;
    }
}
