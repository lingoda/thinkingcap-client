<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfLearningActivityCohort
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivityCohort
     */
    private $LearningActivityCohort;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivityCohort
     */
    public function getLearningActivityCohort()
    {
        return $this->LearningActivityCohort;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivityCohort $LearningActivityCohort
     *
     * @return ArrayOfLearningActivityCohort
     */
    public function withLearningActivityCohort($LearningActivityCohort)
    {
        $new = clone $this;
        $new->LearningActivityCohort = $LearningActivityCohort;

        return $new;
    }
}
