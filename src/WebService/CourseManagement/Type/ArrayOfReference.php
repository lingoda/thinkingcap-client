<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfReference
{
    /**
     * @var null | array<int<0,max>, Reference>
     */
    private ?array $Reference = null;

    /**
     * @return null | array<int<0,max>, Reference>
     */
    public function getReference(): ?array
    {
        return $this->Reference;
    }

    /**
     * @param null | array<int<0,max>, Reference> $Reference
     */
    public function withReference(?array $Reference): static
    {
        $new = clone $this;
        $new->Reference = $Reference;

        return $new;
    }
}
