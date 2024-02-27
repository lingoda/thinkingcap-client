<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfLearningActivityRecord
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivityRecord>
     */
    private ?array $LearningActivityRecord;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivityRecord>
     */
    public function getLearningActivityRecord(): ?array
    {
        return $this->LearningActivityRecord;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivityRecord> $LearningActivityRecord
     */
    public function withLearningActivityRecord(?array $LearningActivityRecord): static
    {
        $new = clone $this;
        $new->LearningActivityRecord = $LearningActivityRecord;

        return $new;
    }
}
