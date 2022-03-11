<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfProgram
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Program
     */
    private $Program;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Program
     */
    public function getProgram()
    {
        return $this->Program;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Program $Program
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
