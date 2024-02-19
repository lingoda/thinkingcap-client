<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfReference
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Reference>
     */
    private ?array $Reference;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Reference>
     */
    public function getReference(): ?array
    {
        return $this->Reference;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Reference> $Reference
     */
    public function withReference(?array $Reference): static
    {
        $new = clone $this;
        $new->Reference = $Reference;

        return $new;
    }
}
