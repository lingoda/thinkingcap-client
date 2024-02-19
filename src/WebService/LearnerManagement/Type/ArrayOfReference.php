<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfReference
{
    private Reference $Reference;

    
    public function getReference(): Reference
    {
        return $this->Reference;
    }

    
    public function withReference(Reference $Reference): static
    {
        $new = clone $this;
        $new->Reference = $Reference;

        return $new;
    }
}
