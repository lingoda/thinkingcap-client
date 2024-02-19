<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

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
