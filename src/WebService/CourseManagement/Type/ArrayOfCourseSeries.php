<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseSeries
{
    /**
     * @var null | array<int<0,max>, CourseSeries>
     */
    private ?array $CourseSeries = null;

    /**
     * @return null | array<int<0,max>, CourseSeries>
     */
    public function getCourseSeries(): ?array
    {
        return $this->CourseSeries;
    }

    /**
     * @param null | array<int<0,max>, CourseSeries> $CourseSeries
     */
    public function withCourseSeries(?array $CourseSeries): static
    {
        $new = clone $this;
        $new->CourseSeries = $CourseSeries;

        return $new;
    }
}
