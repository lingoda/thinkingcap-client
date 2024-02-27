<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfString1
{
    /**
     * @var null | array<int<0,max>, string>
     */
    private ?array $Value;

    /**
     * @return null | array<int<0,max>, string>
     */
    public function getValue(): ?array
    {
        return $this->Value;
    }

    /**
     * @param null | array<int<0,max>, string> $Value
     */
    public function withValue(?array $Value): static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}
