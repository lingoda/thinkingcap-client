<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfString1
{
    private string $Value;

    
    public function getValue(): string
    {
        return $this->Value;
    }

    
    public function withValue(string $Value): static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}
