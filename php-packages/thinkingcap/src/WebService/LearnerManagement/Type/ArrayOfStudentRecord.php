<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfStudentRecord
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentRecord
     */
    private $StudentRecord;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentRecord
     */
    public function getStudentRecord()
    {
        return $this->StudentRecord;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentRecord $StudentRecord
     *
     * @return ArrayOfStudentRecord
     */
    public function withStudentRecord($StudentRecord)
    {
        $new = clone $this;
        $new->StudentRecord = $StudentRecord;

        return $new;
    }
}
