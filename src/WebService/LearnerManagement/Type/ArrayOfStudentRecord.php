<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfStudentRecord
{
    private StudentRecord $StudentRecord;

    
    public function getStudentRecord(): StudentRecord
    {
        return $this->StudentRecord;
    }

    
    public function withStudentRecord(StudentRecord $StudentRecord): static
    {
        $new = clone $this;
        $new->StudentRecord = $StudentRecord;

        return $new;
    }
}
