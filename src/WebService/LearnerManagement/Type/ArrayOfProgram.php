<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfProgram
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Program
     */
    private $Program;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Program
     */
    public function getProgram()
    {
        return $this->Program;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Program $Program
     *
     * @return ArrayOfProgram
     */
    public function withProgram($Program)
    {
        $new = clone $this;
        $new->Program = $Program;

        return $new;
    }
}