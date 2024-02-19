<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfString
{
    private string $string;

    
    public function getString(): string
    {
        return $this->string;
    }

    
    public function withString(string $string): static
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }
}
