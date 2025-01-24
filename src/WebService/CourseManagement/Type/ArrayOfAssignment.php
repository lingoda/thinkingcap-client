<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfAssignment
{
    /**
     * @var null | array<int<0,max>, Assignment>
     */
    private ?array $Assignment = null;

    /**
     * @return null | array<int<0,max>, Assignment>
     */
    public function getAssignment(): ?array
    {
        return $this->Assignment;
    }

    /**
     * @param null | array<int<0,max>, Assignment> $Assignment
     */
    public function withAssignment(?array $Assignment): static
    {
        $new = clone $this;
        $new->Assignment = $Assignment;

        return $new;
    }
}
