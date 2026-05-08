<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfReferenceAudience
{
    /**
     * @var null | array<int<0,max>, ReferenceAudience>
     */
    private ?array $ReferenceAudience = null;

    /**
     * @return null | array<int<0,max>, ReferenceAudience>
     */
    public function getReferenceAudience(): ?array
    {
        return $this->ReferenceAudience;
    }

    /**
     * @param null | array<int<0,max>, ReferenceAudience> $ReferenceAudience
     */
    public function withReferenceAudience(?array $ReferenceAudience): static
    {
        $new = clone $this;
        $new->ReferenceAudience = $ReferenceAudience;

        return $new;
    }
}
