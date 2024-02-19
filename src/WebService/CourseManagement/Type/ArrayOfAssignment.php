<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfAssignment
{
    private Assignment $Assignment;

    
    public function getAssignment(): Assignment
    {
        return $this->Assignment;
    }

    
    public function withAssignment(Assignment $Assignment): static
    {
        $new = clone $this;
        $new->Assignment = $Assignment;

        return $new;
    }
}
