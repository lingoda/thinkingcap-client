<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfProgram
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Program>
     */
    private ?array $Program;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Program>
     */
    public function getProgram(): ?array
    {
        return $this->Program;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Program> $Program
     */
    public function withProgram(?array $Program): static
    {
        $new = clone $this;
        $new->Program = $Program;

        return $new;
    }
}
