<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfLearningActivityRecord
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\LearningActivityRecord
     */
    private $LearningActivityRecord;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\LearningActivityRecord
     */
    public function getLearningActivityRecord()
    {
        return $this->LearningActivityRecord;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\LearningActivityRecord $LearningActivityRecord
     *
     * @return ArrayOfLearningActivityRecord
     */
    public function withLearningActivityRecord($LearningActivityRecord)
    {
        $new = clone $this;
        $new->LearningActivityRecord = $LearningActivityRecord;

        return $new;
    }
}
