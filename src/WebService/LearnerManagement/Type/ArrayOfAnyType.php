<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfAnyType
{
    /**
     * @var null | array<int<0,max>, mixed>
     */
    private ?array $anyType;

    /**
     * @return null | array<int<0,max>, mixed>
     */
    public function getAnyType(): ?array
    {
        return $this->anyType;
    }

    /**
     * @param null | array<int<0,max>, mixed> $anyType
     */
    public function withAnyType(?array $anyType): static
    {
        $new = clone $this;
        $new->anyType = $anyType;

        return $new;
    }
}
