<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfAnyType
{
    private mixed $anyType;

    
    public function getAnyType(): mixed
    {
        return $this->anyType;
    }

    
    public function withAnyType(mixed $anyType): static
    {
        $new = clone $this;
        $new->anyType = $anyType;

        return $new;
    }
}
