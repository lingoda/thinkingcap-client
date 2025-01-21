<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfTimeInterval
{
    /**
     * @var null | array<int<0,max>, TimeInterval>
     */
    private ?array $TimeInterval = null;

    /**
     * @return null | array<int<0,max>, TimeInterval>
     */
    public function getTimeInterval(): ?array
    {
        return $this->TimeInterval;
    }

    /**
     * @param null | array<int<0,max>, TimeInterval> $TimeInterval
     */
    public function withTimeInterval(?array $TimeInterval): static
    {
        $new = clone $this;
        $new->TimeInterval = $TimeInterval;

        return $new;
    }
}
