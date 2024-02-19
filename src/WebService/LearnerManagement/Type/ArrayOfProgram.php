<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfProgram
{
    private Program $Program;

    
    public function getProgram(): Program
    {
        return $this->Program;
    }

    
    public function withProgram(Program $Program): static
    {
        $new = clone $this;
        $new->Program = $Program;

        return $new;
    }
}
