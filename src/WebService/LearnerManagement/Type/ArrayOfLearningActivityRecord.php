<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfLearningActivityRecord
{
    /**
     * @var null | array<int<0,max>, LearningActivityRecord>
     */
    private ?array $LearningActivityRecord = null;

    /**
     * @return null | array<int<0,max>, LearningActivityRecord>
     */
    public function getLearningActivityRecord(): ?array
    {
        return $this->LearningActivityRecord;
    }

    /**
     * @param null | array<int<0,max>, LearningActivityRecord> $LearningActivityRecord
     */
    public function withLearningActivityRecord(?array $LearningActivityRecord): static
    {
        $new = clone $this;
        $new->LearningActivityRecord = $LearningActivityRecord;

        return $new;
    }
}
