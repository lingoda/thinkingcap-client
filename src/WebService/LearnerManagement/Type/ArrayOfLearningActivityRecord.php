<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfLearningActivityRecord
{
    private LearningActivityRecord $LearningActivityRecord;

    
    public function getLearningActivityRecord(): LearningActivityRecord
    {
        return $this->LearningActivityRecord;
    }

    
    public function withLearningActivityRecord(LearningActivityRecord $LearningActivityRecord): static
    {
        $new = clone $this;
        $new->LearningActivityRecord = $LearningActivityRecord;

        return $new;
    }
}
