<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfLearningActivity
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivity
     */
    private $LearningActivity;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivity
     */
    public function getLearningActivity()
    {
        return $this->LearningActivity;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivity $LearningActivity
     *
     * @return ArrayOfLearningActivity
     */
    public function withLearningActivity($LearningActivity)
    {
        $new = clone $this;
        $new->LearningActivity = $LearningActivity;

        return $new;
    }
}
