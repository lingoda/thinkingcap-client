<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfStudentRecord
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentRecord>
     */
    private ?array $StudentRecord;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentRecord>
     */
    public function getStudentRecord(): ?array
    {
        return $this->StudentRecord;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentRecord> $StudentRecord
     */
    public function withStudentRecord(?array $StudentRecord): static
    {
        $new = clone $this;
        $new->StudentRecord = $StudentRecord;

        return $new;
    }
}
