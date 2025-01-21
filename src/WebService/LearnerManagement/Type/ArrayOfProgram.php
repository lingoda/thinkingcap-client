<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfProgram
{
    /**
     * @var null | array<int<0,max>, Program>
     */
    private ?array $Program = null;

    /**
     * @return null | array<int<0,max>, Program>
     */
    public function getProgram(): ?array
    {
        return $this->Program;
    }

    /**
     * @param null | array<int<0,max>, Program> $Program
     */
    public function withProgram(?array $Program): static
    {
        $new = clone $this;
        $new->Program = $Program;

        return $new;
    }
}
