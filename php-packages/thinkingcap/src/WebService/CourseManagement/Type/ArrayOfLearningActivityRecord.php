<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfLearningActivityRecord
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivityRecord
     */
    private $LearningActivityRecord;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivityRecord
     */
    public function getLearningActivityRecord()
    {
        return $this->LearningActivityRecord;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivityRecord $LearningActivityRecord
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
