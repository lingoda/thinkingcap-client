<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfTimeInterval
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeInterval>
     */
    private ?array $TimeInterval;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeInterval>
     */
    public function getTimeInterval(): ?array
    {
        return $this->TimeInterval;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeInterval> $TimeInterval
     */
    public function withTimeInterval(?array $TimeInterval): static
    {
        $new = clone $this;
        $new->TimeInterval = $TimeInterval;

        return $new;
    }
}
