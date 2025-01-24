<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfStudentRecord
{
    /**
     * @var null | array<int<0,max>, StudentRecord>
     */
    private ?array $StudentRecord = null;

    /**
     * @return null | array<int<0,max>, StudentRecord>
     */
    public function getStudentRecord(): ?array
    {
        return $this->StudentRecord;
    }

    /**
     * @param null | array<int<0,max>, StudentRecord> $StudentRecord
     */
    public function withStudentRecord(?array $StudentRecord): static
    {
        $new = clone $this;
        $new->StudentRecord = $StudentRecord;

        return $new;
    }
}
