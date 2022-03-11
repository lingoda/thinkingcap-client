<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfAssignment
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Assignment
     */
    private $Assignment;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Assignment
     */
    public function getAssignment()
    {
        return $this->Assignment;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Assignment $Assignment
     *
     * @return ArrayOfAssignment
     */
    public function withAssignment($Assignment)
    {
        $new = clone $this;
        $new->Assignment = $Assignment;

        return $new;
    }
}
