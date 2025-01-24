<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCourse
{
    /**
     * @var null | array<int<0,max>, Course>
     */
    private ?array $Course = null;

    /**
     * @return null | array<int<0,max>, Course>
     */
    public function getCourse(): ?array
    {
        return $this->Course;
    }

    /**
     * @param null | array<int<0,max>, Course> $Course
     */
    public function withCourse(?array $Course): static
    {
        $new = clone $this;
        $new->Course = $Course;

        return $new;
    }
}
